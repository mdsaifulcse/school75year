<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Model\AptitudeTest;
use App\Model\AptitudeTestAns;
use App\Model\Attendance;
use App\Model\Batch;
use App\Model\Branch;
use App\Model\EnglishWrittenAns;
use App\Model\PrimaryInfo;
use App\Model\Routine;
use App\Model\StudentPayment;
use App\Model\Union;
use App\Model\UserInfo;
use App\Model\Village;
use App\Test;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Yajra\Datatables\Datatables;
use Auth,Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.student.index');
    }

    public function studentInformation(){
        return view('backend.student.student-information');
    }


    public function showAllStudentsData(){
        $allStudents=User::leftjoin('user_info','users.id','user_info.user_id')
           ->leftjoin('branch','branch.id','users.branch')
            ->select('branch.name as branch_name','user_info.payable_amount','user_info.total_paid','users.*')
            ->where('users.type','!=',1)
            ->where('user_info.total_paid','>',0);

        return DataTables::of($allStudents)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('Due','<?php echo $payable_amount-$total_paid?>')
            ->addColumn('Invoice','
            <a  href="javascript:void(0);" onclick="invoiceDetails({{$id}})" class="btn btn-warning btn-sm" >View</a>
            ')
            ->addColumn('View','
            <a  href="{{URL::to(\'view-register-student-form/\'.$id)}}" class="btn btn-warning btn-sm" >View</a>
            ')
            ->rawColumns(['Due','Invoice','View'])
            ->toJson();
    }

    

    public function pendingApplicant()
    {
        return view('backend.student.bookedStudent');
    }

    public function partialApproveApplicant()
    {
        $authRole = \MyHelper::user()->role;
        $admins=User::leftJoin('role_user','role_user.user_id','users.id')
        ->leftJoin('roles','roles.id','role_user.role_id')
        ->where(['users.type'=>'1','roles.slug'=>'admin'])->orWhere('roles.slug','super-admin')->orderBy('users.id','desc')->pluck('users.name','users.id');
        return view('backend.student.registeredstudent',compact('authRole','admins'));
    }
    public function fullApproveApplicant()
    {
        return view('backend.student.index');
    }

    protected function showAllRegistrationData($regStatus=null,$adminId=null){

        $authBatchVillage = \MyHelper::batchVillage();
        $authRole = \MyHelper::user()->role;

        $allStudents=User::leftjoin('user_infos','users.id','user_infos.user_id')
            ->leftjoin('batch','batch.id','user_infos.batch_id')
            ->leftjoin('villages','villages.id','user_infos.village_id')
            ->leftjoin('unions','unions.id','user_infos.union_id')
            ->select('batch.batch_name','user_infos.batch_id','user_infos.class_name','villages.village','unions.union','user_infos.ticket_no','user_infos.father_name','user_infos.payable','user_infos.paid','user_infos.dues','user_infos.status','users.*')
            ->where('users.type',2)->orderBy('user_infos.id','desc');

        if ($regStatus==0){
            $allStudents=$allStudents->where('user_infos.status',0);
        }elseif ($regStatus==1){
            $allStudents=$allStudents->where('user_infos.status',1);
        }elseif ($regStatus==2){
            $allStudents=$allStudents->where('user_infos.status',2);
        }

        if ($adminId!=null){
            $allStudents=$allStudents->where(['user_infos.status'=>1,'user_infos.received_by'=>$adminId]);
        }

        if ($authRole=='admin'){
            $allStudents=$allStudents->where([
                'user_infos.batch_id'=>$authBatchVillage->batchId,
                'user_infos.village_id'=>$authBatchVillage->villageId
            ]);

            return DataTables::of($allStudents)
                ->addIndexColumn()
                ->addColumn('DT_RowIndex','')
                ->addColumn('Check','<input type="checkbox" name="user_id[]" value="{{$id}}">')
                ->addColumn('batch_name','@if($batch_id==1)
                <span> {{$class_name}} </span>
            @else
           <span> {{$batch_name}} </span>
            @endif
            ')
                ->addColumn('Action','
            <div> @if($status==2)
           
           <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
              </ul>
            </div>
           
            @elseif($status==0)
            <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
                <li> <a  href="{{URL::to(\'approve-with-payment/\'.$id)}}" title="Click here to view student information" class="btn btn-danger btn-xs" >Approve with Payment</a></li>
               
              </ul>
            </div>
            @elseif($status==1)
            <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
               
              </ul>
            </div>
            @endif
              
              </div>
            '
                )->addColumn('Photo','
                @if($image==\'\')
                <span class="text-danger"> No Photo </span>
            @else
           <img src="{{asset($image)}}" alt="{{$name}}" title="{{$name}}" width="50">
            @endif
                ')
                ->rawColumns(['Check','Action','DT_RowIndex','batch_name','Photo'])
                ->toJson();



        }else{


            return DataTables::of($allStudents)
                ->addIndexColumn()
                ->addColumn('DT_RowIndex','')
                ->addColumn('Check','<input type="checkbox" name="user_id[]" value="{{$id}}">')
                ->addColumn('batch_name','@if($batch_id==1)
                <span> {{$class_name}} </span>
            @else
           <span> {{$batch_name}} </span>
            @endif
            ')
            ->addColumn('Action','
            <div> @if($status==2)
            <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="{{URL::to(\'quick-registration/\'.$id.\'/edit\')}}" title="Click here to view invoice" class="btn btn-warning btn-xs" >Edit</a></li>
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
                <li><a href="javascript:void(0);" onclick="uploadPhoto({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Photo Upload</a></li>
              </ul>
            </div>
            @elseif($status==0)
            <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
                <li> <a  href="{{URL::to(\'approve-with-payment/\'.$id)}}" title="Click here to view student information" class="btn btn-success btn-xs" >Approve with Payment</a></li>
                
                {!!Form::open(array(\'url\'=>\'delete-user\',\'method\'=>\'POST\',\'id\'=>"deleteForm$id"))!!}
                <input type="hidden" name="id" value="{{$id}}" />
         
                     <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{$id}}\')"><i class="fa fa-trash"></i> Delete</button>
                {!! Form::close() !!}
               
              </ul>
            </div>
            @elseif($status==1)
            <div class="dropdown student-list">
              <button class="no-padding" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu " aria-labelledby="dLabel">
                <li><a href="javascript:void(0);" onclick="applicantDetails({{$id}})" title="Click here to view invoice" class="btn btn-primary btn-xs" >Details</a></li>
                
                {!!Form::open(array(\'url\'=>\'delete-user\',\'method\'=>\'POST\',\'id\'=>"deleteForm$id"))!!}
                <input type="hidden" name="id" value="{{$id}}" />
         
                     <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{$id}}\')"><i class="fa fa-trash"></i> Delete</button>
                {!! Form::close() !!}
               
              </ul>
            </div>
            @endif
              
              </div>
            '
                )->addColumn('Photo','
                @if($image==\'\')
                <span class="text-danger"> No Photo </span>
            @else
           <img src="{{asset($image)}}" alt="{{$name}}" title="{{$name}}" width="50">
            @endif
                ')
                ->rawColumns(['Check','Action','DT_RowIndex','batch_name','Photo'])
                ->toJson();


        }

    }


    protected function showUserPhotoUploadForm($user_id){
        $userData=User::findOrfail($user_id);
        $userDetails=UserInfo::with('receivedBy','userInfoVillage','userInfoBatch','userInfoUnion','userInfoThana','userInfoDist','userData')
            ->where('user_id',$user_id)->first();

        return view('backend.student.applicant-photo-upload', compact('userData','userDetails'));
    }


    protected function saveUserUploadedPhoto(Request $request){
        $user=User::findOrFail($request->user_id);
        DB::beginTransaction();
        try{

            if ($request->hasFile('image')){
                $input['image']=\MyHelper::photoUpload($request->file('image'),'images/students/',300);
                $input['updated_at']=date('Y-m-d h:i:s');
                if (file_exists($user->image)){
                    unlink($user->image);
                }
            }

            $data =$user->update($input);

            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Photo successfully upload');
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }


    }

    protected function deleteApplicantUser(Request $request){

        DB::beginTransaction();
        try{

                $user=User::findOrFail($request->id);

                if (!empty($user)){

                    $userInfo=UserInfo::where('user_id',$user->id)->delete();
                }

            $user->delete();

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Registration data successfully deleted');
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }




    }


    protected function finalApprove(Request $request){

        DB::beginTransaction();
        try{

            if (!isset($request->user_id)){
                return redirect()->back()->with('error','At least one student must be select for approve action');
            }

            foreach ($request->user_id as $userId){

                $user=User::where('id',$userId)->first();

                if (!empty($user)){

                    $userInfo=UserInfo::where('user_id',$user->id)->first();


                    $userInfo->update(['confirmed_by'=>\Auth::user()->id,'status'=>'2']);

                }

            }



            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','All Applicant Successfully Approved');
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }


    }



    protected function userApproveWithPayment($user_id){

        $userData=User::findOrfail($user_id);
        $userDetails=UserInfo::with('userInfoVillage','userInfoBatch','userInfoUnion','userInfoThana','userInfoDist','userData')
           ->where('user_id',$user_id)->first();


        return view('backend.student.approve-with-payment',compact('userDetails','userData'));
    }


    protected function saveRegistrationPayment(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id'  => 'required',
            'paid'  => 'required',
            'voucher_no'  => 'required|unique:user_infos',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userData=User::findOrFail($request->user_id);

        $input = $request->all();

        DB::beginTransaction();
        try{

            $data=UserInfo::where('user_id',$request->user_id)->first();

            if ($data->payable!=$request->paid){
                return redirect()->back()->with('error','Received amount must be '.$data->payable.' but you entered '.$request->paid);
            }

            $authRole = \MyHelper::user()->role;

            $maxSerialNum=UserInfo::max('serial_num')+1;
            $newAutoId=str_pad($maxSerialNum,4,"0",STR_PAD_LEFT);
            $serialId='djss20-'.$newAutoId;

            if ($authRole=='super-admin'){
                $data->update(['received_by'=>\Auth::user()->id,'confirmed_by'=>\Auth::user()->id,'paid'=>$request->paid,'voucher_no'=>$request->voucher_no,'status'=>'2','registration_id'=>$serialId]);
            }else{
                $data->update([
                    'received_by'=>\Auth::user()->id,
                    'status'=>'1',
                    'paid'=>$request->paid,
                    'voucher_no'=>$request->voucher_no,
                    'registration_id'=>$serialId
                ]);
            }



            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect('pending-applicant')->with('success','Registration fee Tk.'.$request->paid.' Successfully Received for '.$userData->name);
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }
    }

    protected function updateVoucherNumber(Request $request){

        $userData=User::findOrFail($request->user_id);

        $userInfoData=UserInfo::where('voucher_no',$request->voucher_no)->first();
        if (!empty($userInfoData)){
            return redirect()->back()->with('error','Voucher Number Already Exist '."( $request->voucher_no )");
        }

        DB::beginTransaction();
        try{
            $data=UserInfo::where('user_id',$request->user_id)->first();

            $data->update(['voucher_no'=>$request->voucher_no]);
            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Registration fee Tk.'.$request->voucher_no.' Successfully Update of '.$userData->name);
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }
    }


    public function showUserApplicantDetails($user_id)
    {
        $userData=User::findOrfail($user_id);
        $userDetails=UserInfo::with('receivedBy','userInfoVillage','userInfoBatch','userInfoUnion','userInfoThana','userInfoDist','userData')
            ->where('user_id',$user_id)->first();

        return view('backend.student.payment-statement', compact('userData','userDetails'));
    }


    public function viewRegisterStudentForm($userId){

        $registerStudent=User::leftjoin('user_info','users.id','user_info.user_id')
            ->leftjoin('branch','branch.id','users.branch')
            ->select('branch.name as branch_name','user_info.*','users.*')
            ->where(['users.id'=>$userId])->first();

        $branches=Branch::select('name','id')->orderBy('id','desc')->get();
        $info = PrimaryInfo::first();
        $bkashPayment=StudentPayment::where('user_id',$userId)->whereNotNull('trx_id')->sum('amount');
        $cashPayment=StudentPayment::where('user_id',$userId)->whereNull('trx_id')->sum('amount');

        $due=$registerStudent->payable_amount-($registerStudent->total_paid);

        return view('backend.student.register-student-form-view',
            compact('registerStudent','branches','info','bkashPayment','cashPayment','due'));
    }

    protected function deleteRegisterStudent(Request $request){

        //return $request;
        $user=User::findOrFail($request->id);
        DB::beginTransaction();
        try {
            $routines=Routine::where('user_id',$user->id)->get(); // delete user Routine ------
            if (count($routines)>0){
                foreach ($routines as $routine) {
                    $routine->delete();
                }
            }

            $userInfo=UserInfo::where('user_id',$user->id)->delete(); // delete user Info ------

            $aptitudeTests=AptitudeTest::where('user_id',$user->id)->get(); // delete user aptitude test ------

            if (count($aptitudeTests)>0){
                foreach ($aptitudeTests as $test) {
                    $test->delete();
                }
            }

            $englishAns=EnglishWrittenAns::where('user_id',$user->id)->delete(); // delete user english written test ------
            if (!empty($englishAns)){
                $englishAns->delete();
            }

            $user->delete();

            if (file_exists($user->image)){
                unlink($user->image);
            }
            $bug = 0;
            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if ($bug == 0) {
            return redirect()->back()->with('success', 'Student successfully delete');
        }elseif ($bug==547){
            return redirect()->back()->with('error', 'Sorry this users can not be delete due to used another module '.$bug);
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ' . $bug1);
        }
    }


    public function downloadForm($studentId){


         $info = User::leftjoin('user_info','user_info.user_id','users.id')
            ->select('users.name','users.email','users.mobile_no','users.image','users.branch','user_info.*')->where('user_id',$studentId)->first();

        if($info==''){
            return redirect()->back();
        }


        $branches=Branch::orderBy('id','desc')->select('id','name')->get();

        $bkashPayment=StudentPayment::where('user_id',$studentId)->whereNotNull('trx_id')->sum('amount');
        $cashPayment=StudentPayment::where('user_id',$studentId)->whereNull('trx_id')->sum('amount');

        $due=$info->payable_amount-($bkashPayment+$cashPayment);
        $pdf = PDF::loadView('backend/formPdfByAdmin',compact('info','bkashPayment','cashPayment','due','branches'))->setPaper('a4', 'portrait');
        //return $pdf->stream();
        return $pdf->download($info->name.'.pdf');
    }


    public function addStudentBulk(){
        return view('backend.student.student-add');
    }



    public function studentBulkUpdate(Request $request){
        $fileName=$request->file('file')->getRealPath();
        $reader = IOFactory::createReader('Xlsx')->setReadDataOnly(true)->load($fileName);
        $sheetData = $reader->getActiveSheet()->toArray(null, true, true, true);
        DB::beginTransaction();
        try{
            for ($row=2; $row <= count($sheetData); $row++){
                $student_id_number = $sheetData[$row]["A"];
                DB::table('tests2')
                    ->where('user_id', $student_id_number)
                    ->update(
                    [
                        'phone' => $sheetData[$row]["B"],
                        'alp' => $sheetData[$row]["C"],
                        'num' => $sheetData[$row]["D"],
                    ]
                );
            }

            DB::commit();
            $bug=0;

        } catch (\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('update-student-bulk')->with('success','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error','The Email has already been taken.');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }


    public function loadStudentPaymentStatement($userId){
        $info = PrimaryInfo::select('logo','address')->first();

        $userInfo=User::leftjoin('branch','branch.id','users.branch')
            ->leftjoin('user_info','user_info.user_id','users.id')
         ->select('branch.name as branch_name','user_info.payable_amount', 'user_info.total_paid','users.*')
           ->where('users.id',$userId)->first();

        $paymentDetails=StudentPayment::where('user_id',$userId)->get();

        return view('backend.student.payment-statement',compact('info','userInfo','paymentDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allData=User::where('users.type','!=',1)
            ->orderBy('users.id','DESC')->get();

        return DataTables::of($allData)
        ->addColumn('action','{!!Form::open(array(\'route\'=>[\'students.destroy\',"$id"],\'method\'=>\'DELETE\',\'id\'=>"deleteForm$id"))!!}
            <a href="{{URL::to("students/$id/")}}" title=\'Click here to view all info \' class="btn btn-info btn-xs"> <i class="fa fa-eye"></i></a>
            <a href="{{URL::to("students/$id/edit")}}" title=\'Click here to edit \' class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm(\'deleteForm{{ $id}}\')"><i class="fa fa-trash"></i></button>
       {!! Form::close() !!}')
        ->rawColumns(['action'])
        ->make(true);
    }


    public function showAllStudentForm(){

        return view('backend.student.all-student-form-view');
    }

    public function getAllStudentData(){
        $allStudents=User::join('user_info','users.id','user_info.user_id')
            ->leftjoin('branch','branch.id','users.branch')
            ->select('branch.name as branch_name','user_info.payable_amount','user_info.total_paid','users.*')
            ->where('users.type','!=',1);

        return DataTables::of($allStudents)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('Due','<?php echo $payable_amount-$total_paid?>')
            ->addColumn('Invoice','<a  href="javascript:void(0);" onclick="invoiceDetails({{$id}})" class="btn btn-warning btn-sm" >View</a>')
            ->addColumn('View','a  href="{{URL::to(\'view-register-student-form/\'.$id)}}" class="btn btn-warning btn-sm" >View</a>')
            ->rawColumns(['Due','Invoice','View'])
            ->toJson();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showstudent(){
        return view('backend.student_list.student_list');
    }

    public function allstudentshow(){

        $allStudents=User::leftjoin('students','users.id','students.user_id')
            ->leftjoin('branch','branch.id','users.branch')
            ->select('branch.name as branch_name','students.payable_amount','students.total_paid','users.*')
            ->where('users.type','!=',1)
            ->where('students.total_paid',0);


        return DataTables::of($allStudents)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('Due','<?php echo $payable_amount-$total_paid?>')
            ->addColumn('View','
            <a  href="{{URL::to(\'view-register-student-form/\'.$id)}}" title="View Details" class="btn btn-warning btn-sm" >View</a>
            ')
            ->rawColumns(['Due','View'])
            ->toJson();
    }
}
