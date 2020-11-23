<?php

namespace App\Http\Controllers;

use App\Mail\SendLoginCredintial;
use App\Model\Branch;
use App\Model\Course;
use App\Model\PrimaryInfo;
use App\Model\ProgramStudies;
use App\Model\Season;
use App\Model\SubCourse;
use App\User;
use App\Model\StudentPayment;
use App\Model\UserInfo;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;

class CoustomPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchStudent(Request $request){

        date_default_timezone_set('Asia/Dhaka');

        $allstudent=User::leftJoin('program_studies','program_studies.user_id','users.id')
            ->leftJoin('batches','program_studies.course_id','batches.id')
            ->leftJoin('sub_courses','program_studies.sub_course_id','sub_courses.id')
            ->select('program_studies.id as studyId','batches.name as course_name','sub_courses.sub_course','users.*')
            ->where(['users.type'=>2,'program_studies.status'=>2,'deactivate'=>'1'])->where('payable_amount','>',function ($query){
                return $query->select(DB::raw('(total_paid+discount_amount)'));
            });
        $roleId = \MyHelper::user()->role_id;
        $branch = \MyHelper::user()->branch;
        if($roleId!=1 and $roleId!=2){
            $allstudent = $allstudent->where('program_studies.branch_id',$branch);
        }
        $allstudent =$allstudent->get();
        $invoice ='';
        $amount ='';
        $success='';
        $userInfo='';
        $info='';
        $programStudy='';
        $invoiceData='';

        if(isset($request->invoice)){
            $invoiceData = StudentPayment::where('invoice',$request->invoice)->first();
            $invoice=$invoiceData->invoice;
            $amount=$invoiceData->amount;
            $success=1;
            $userInfo=User::leftjoin('user_info','user_info.user_id','users.id')->leftjoin('branch','users.branch','branch.id')
                ->select('branch.name as branch_name','users.*')->where('users.id',$invoiceData->user_id)->first();
            $programStudy = ProgramStudies::findOrFail($invoiceData->program_study_id);
            $info = PrimaryInfo::first();
        }

        return view('backend.student.studentsearch',compact('invoice','amount','allstudent','success','userInfo','info','programStudy','invoiceData'));

    }


    public function studentDuesSubCourses($mobileNo){

        $dueCourses=User::leftJoin('program_studies','program_studies.user_id','users.id')
            ->leftJoin('batches','program_studies.course_id','batches.id')
            ->leftJoin('sub_courses','program_studies.sub_course_id','sub_courses.id')
            ->leftJoin('seasons','program_studies.season_id','seasons.id')
            ->select('program_studies.id as studyId', DB::raw('CONCAT(batches.name," ",session," ",sub_course)AS subCourses'),'users.*')
            ->where(['users.type'=>2,'program_studies.status'=>2,'deactivate'=>'1','mobile_no'=>$mobileNo])->where('payable_amount','>',function ($query){
                return $query->select(DB::raw('(total_paid+discount_amount)'));
            });


        $roleId = \MyHelper::user()->role_id;
        $branch = \MyHelper::user()->branch;
        if($roleId!=1 and $roleId!=2){
            $dueCourses = $dueCourses->where('users.branch',$branch);
        }

        $dueCourses = $dueCourses->get();


            //->pluck('subCourses','studyId');


        return response()->json($dueCourses);

      //  return view('backend.load-data.dues-sub-batches',compact('dueCourses'));
    }



    public function paymentInfo($studyId){
        $student=ProgramStudies::leftJoin('users','program_studies.user_id','users.id')
            ->leftJoin('user_info','users.id','user_info.user_id')
            ->leftjoin('branch','users.branch','branch.id')
            ->select('branch.name as branch_name','program_studies.id as studyId','users.*')
            ->where('program_studies.id','=',$studyId);
        $roleId = \MyHelper::user()->role_id;
        $branch = \MyHelper::user()->branch;
        if($roleId!=1 and $roleId!=2){
            $student = $student->where('users.branch',$branch);
        }
        $student = $student->first();


        $programStudy='';
        if ($student!='') {
            $programStudy = ProgramStudies::with('courseOfProgramStudy','seasonOfProgramStudy','subCourseOfProgramStudy','discountTypeOfProgramStudy')
                ->where(['id' => $student->studyId])->first();
        }

        $dues=$programStudy->payable_amount-($programStudy->total_paid+$programStudy->discount_amount);
        $payments = StudentPayment::where('program_study_id','=',$programStudy->id)->first();

        return response()->json(array('success' => true, 'student' => $student, 'dues'=>$dues, 'payments' => $payments,'programStudy'=>$programStudy));

    }

    public function loadCashPaymentData($studyId,$amount){


        $studyCourse=ProgramStudies::findOrFail($studyId);


        $userInfo=User::leftjoin('user_info','user_info.user_id','users.id')
            ->leftjoin('branch','users.branch','branch.id')
            ->select('branch.name as branch_name','branch.address as branch_address','branch.contact','branch.branch_id','users.*')
            ->where('users.id',$studyCourse->user_id)->first();

        $programStudy = ProgramStudies::with('courseOfProgramStudy','seasonOfProgramStudy','subCourseOfProgramStudy','discountTypeOfProgramStudy')
            ->where(['id'=>$studyCourse->id])->first();

        $info = PrimaryInfo::first();
        $invoice = StudentPayment::max('id')+1;
        $invoice = 'ACC'.$userInfo->branch_id.$programStudy->id.$invoice;

        return view('backend.student.cash-payment-details',compact('invoice','amount','userInfo','info','programStudy'));
    }

    public function saveStudentCashPayment(Request $request){

        DB::beginTransaction();
        try{

            $programStudy=ProgramStudies::findOrFail($request->study_id);


            $invoice = StudentPayment::max('id')+1;
            $userInfo =User::leftjoin('branch','users.branch','branch.id')
                ->select('branch.branch_id','users.id','mobile_no','email')->where('users.id',$programStudy->user_id)->first();
             // ------------  Generate Student Id --------------------

           $studentInfoId=UserInfo::select('student_id','id','max_student_id')->where('user_id',$programStudy->user_id)->first();

            $maxStudentId=UserInfo::where('branch_id',$userInfo->branch_id)->max('max_student_id')+1; // by last user id

            if ($studentInfoId->student_id==''){
                $newAutoId=str_pad($maxStudentId,4,"0",STR_PAD_LEFT);
                $studentId=date('y').$userInfo->branch_id.$newAutoId;
                $studentInfoId->update(['student_id'=>$studentId,'max_student_id'=>$maxStudentId]);
            }


            // for change admission date -------------
            if ($programStudy->total_paid>0){
                $admissionDate=$programStudy->admission_date;
            }else{
                $admissionDate=date('Y-m-d');
            }


            if (!empty($programStudy)){
                $programStudy->update(
                    [
                        'total_paid'=>$programStudy->total_paid+$request->amount,
                        'admission_date'=>$admissionDate,
                        'status'=>2,
                        'updated_by'=>\Auth::user()->id
                    ]);
            }


            $invoice = 'ACC'.$userInfo->branch_id.$programStudy->id.$invoice;
            $amount=$request->amount;
           $prevDue = $programStudy->payable_amount-($programStudy->total_paid+$programStudy->discount_amount);
            $input=[
                'program_study_id'=>$programStudy->id,
                'invoice'=>$invoice,
                'user_id'=>$request->user_id,
                'amount'=>$amount,
                'prev_due'=>$prevDue,
                'payment_id'=>'offline-received',
                'transaction_status'=>'Completed',
                'trx_id'=>'offline-received',
                'payment_date'=>date('Y-m-d'),
                'created_by'=>Auth::user()->id,
            ];

            StudentPayment::create($input);

            $due = $programStudy->payable_amount-$programStudy->total_paid-$programStudy->discount_amount;
            $msg = 'Congrats! Your payment of TK.'.$request->amount.' is successful. Your Dues: TK.'.$due.'. You can complete payment by paying again from https://ims.achievementcc.com';
            $result = \SMS::single($userInfo->mobile_no,$msg);
            $subject='';
            //Mail::to($userInfo->email)->send(new SendLoginCredintial($subject, $msg));
            DB::commit();
            $bug=0;
        }catch (Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }

        if($bug==0){
            return redirect('/student-payment-statement/'.$userInfo->id.'/'.$programStudy->id);
            //return redirect('/search-student?invoice='.$invoice)->with('success', 'Tk'.$amount.' received in cash successfully');
            //return view('backend.student.studentsearch',compact('allstudent','success','amount','userInfo','info','invoice'));


        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }

    }


    protected function studentSinglePaymentDetails($userId,$studyId){
        $info = PrimaryInfo::select('logo','address','mobile_no')->first();

        $userInfo=User::leftjoin('branch','branch.id','users.branch')
            ->leftjoin('program_studies','program_studies.user_id','users.id')
            ->leftjoin('batches','program_studies.course_id','batches.id')
            ->leftjoin('sub_courses','program_studies.sub_course_id','sub_courses.id')
            ->leftjoin('seasons','program_studies.season_id','seasons.id')
            ->leftjoin('special_discounts','program_studies.special_discount_id','special_discounts.id')
            ->select('batches.name as course_name','sub_courses.sub_course','seasons.session','special_discounts.discount_name','branch.name as branch_name','branch.address as branch_address','branch.contact','program_studies.special_discount_id','program_studies.payable_amount', 'program_studies.discount_amount','program_studies.total_paid',
                'program_studies.last_payment_date','users.*')
            ->where(['users.id'=>$userId,'program_studies.id'=>$studyId])->first();

        $paymentDetails=StudentPayment::orderBy('id','asc')->where(['user_id'=>$userId,'program_study_id'=>$studyId])->get();

        if(!count($paymentDetails)>0){
            return redirect()->back()->with('error','No Payment information found !');
        }

        return view('backend.student.single-payment-statement',compact('info','userInfo','paymentDetails'));
        //return response()->json(['info'=>$info,'userInfo'=>$userInfo,'paymentDetails'=>$paymentDetails]);

    }


}
