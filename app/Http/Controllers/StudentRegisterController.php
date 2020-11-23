<?php

namespace App\Http\Controllers;

use App\Mail\SendLoginCredintial;
use App\Model\Batch;
use App\Model\District;
use App\Model\ThanaUpazila;
use App\Model\Union;
use App\Model\UserInfo;
use App\Model\Village;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use DB,Auth,Validator,MyHelper,SMS,Response;
use Illuminate\Support\Facades\Mail;

class StudentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches =Batch::orderBy('serial_num','asc')->pluck('batch_name','id');
        $district =District::orderBy('serial_num','asc')->pluck('district','id');
        return view('backend.student-register.create',compact('batches','district'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {


    }


    public function userValidation($data,$userID=null){

        $userData='';
        if (strpos($data, '@') !== false) {

            if ($userID!=''){
                $userData=User::where(['email'=>$data])->where('id','!=',$userID)->first();
            }else{
                $userData=User::where(['email'=>$data])->first();
            }

        }else{
            if ($userID!='') {
                $userData = User::where(['mobile_no' => $data])->where('id', '!=', $userID)->first();
            }else {
                $userData = User::where(['mobile_no' => $data])->first();
            }
        }

        return Response::json(['userData'=>$userData,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'  => 'required|max:150',
            'mobile_no'  => "required|min:11|max:11|regex:/(01)[0-9]{9}/",
            'batch_id' => "required_if:student_category,==,1",
            'class_name' => "required_if:student_category,==,2",
            'father_name' => 'required|max:150',
            'payment_method' => 'required|max:10',
            'district_id' => 'required',
            'thana_upazila_id' => 'required',
            'union_id' => 'required',
            'village_id' => 'required',
            'student_category' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        //$code = mt_rand(100000,999999);
        $number = substr($request->mobile_no, -10);
        $number = '0'.$number;

        //$result = \SMS::single($number,$msg);
        DB::beginTransaction();
        try{
            $input['type']=2;
            $input['password']=bcrypt($number);


            if ($request->hasFile('image')){
                $input['image']=\MyHelper::photoUpload($request->file('image'),'images/students/',300);
                //$input['image']=asset('/').$uploadPath;
            }


            $data =  User::create($input);
            \DB::table('role_user')->insert(['role_id'=>4,'user_id'=>$data->id]);


            $userInfoInput=$request->except('token');
            $userInfoInput['user_id']=$data->id;



            $ticket_no=1;
            $payable=0;
            if($request->student_category==1 || $request->student_category==3){
                $payable=800;
                if ($request->spouse==1){
                    $ticket_no+=1;
                    $payable+=500;
                }

                if ($request->children!=''){
                    $ticket_no+=$request->children;
                    $payable+=200*$request->children;
                }
                if ($request->exStdGuest!=''){
                    $ticket_no+=$request->exStdGuest;
                    $payable+=400*$request->exStdGuest;
                }


                $userInfoInput['ticket_no']=$ticket_no;
                $userInfoInput['payable']=$payable;
                $userInfoInput['guest_no']=$request->exStdGuest;


            }elseif($request->student_category==2){

                if ($request->class_name=='Honours' || $request->class_name=='Masters' || $request->class_name=='Eleven' || $request->class_name=='Twelve'){
                    $payable=400;
                }else{
                    $payable=200;
                    $userInfoInput['batch_id']=1;
                }


                if ($request->runnigStdguest!=''){
                    $ticket_no+=$request->runnigStdguest;
                    $payable+=400*$request->runnigStdguest;
                }

                $userInfoInput['ticket_no']=$ticket_no;
                $userInfoInput['payable']=$payable;
                $userInfoInput['guest_no']=$request->runnigStdguest;

            }


            if ($payable!=$request->paid){
                return redirect()->back()->with('error','Received Amount Must be :Tk.'.$payable);
            }


            $maxSerialNum=UserInfo::max('serial_num')+1;
            if (!empty($request->paid) && $request->paid>0){

                $newAutoId=str_pad($maxSerialNum,4,"0",STR_PAD_LEFT);
                $serialId='djss20-'.$newAutoId;

                $userInfoInput['status']=1;
                $userInfoInput['received_by']=\Auth::user()->id;
                $userInfoInput['paid']=$request->paid;
                $userInfoInput['dues']=$payable-$request->paid;
                $userInfoInput['registration_id']=$serialId;
                $userInfoInput['serial_num']=$maxSerialNum;
                $userInfoInput['payment_date']=date('Y-m-d');
            }else{
                $userInfoInput['status']=0;
            }

            if ($request->spouse==''){
                $userInfoInput['spouse']=0;
            }

            //$userInfoInput;


            $userInfoInput['created_by']=\Auth::user()->id;
            UserInfo::create($userInfoInput);

            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Please save this Code: '.$number.' to check your registration status');
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }
    }


    protected function generateStudentId($academicYear){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function urlGenerate($amount){

    }

    public function show($userId)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        User::findOrFail($id);
        $batches =Batch::orderBy('serial_num','asc')->pluck('batch_name','id');
        $district =District::orderBy('serial_num','asc')->pluck('district','id');
        $data=User::leftJoin('user_infos','users.id','user_infos.user_id')
            ->select('user_infos.*','users.*')->where('users.id','=',$id)->first();

        $thana=ThanaUpazila::where(['district_id'=>$data->district_id])->orderBy('serial_num','asc')->pluck('thana_upazila','id');
        $unions=Union::where(['thana_upazila_id'=>$data->thana_upazila_id])->orderBy('serial_num','asc')->pluck('union','id');
        $villages=Village::where(['union_id'=>$data->union_id])->orderBy('serial_num','asc')->pluck('village','id');

        return view('backend.student-register.edit',compact('batches','district','data','thana','unions','villages'));
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

         $userData=User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'  => 'required|max:150',
            'mobile_no'  => "required|min:11|max:11|regex:/(01)[0-9]{9}/",
            'batch_id' => "required_if:student_category,==,1",
            'class_name' => "required_if:student_category,==,2",
            'father_name' => 'required|max:150',
            'payment_method' => 'required|max:10',
            'district_id' => 'required',
            'thana_upazila_id' => 'required',
            'union_id' => 'required',
            'village_id' => 'required',
            'student_category' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        //$code = mt_rand(100000,999999);
        $number = substr($request->mobile_no, -10);
        $number = '0'.$number;

        //$result = \SMS::single($number,$msg);
        DB::beginTransaction();
        try{
            if ($request->hasFile('image')){
                $input['image']=\MyHelper::photoUpload($request->file('image'),'images/students/',300);
                if (file_exists($userData->image)){
                    unlink($userData->image);
                }
            }


             $userData->update($input);

            $userInfoInput=$request->except('token');

            $userInfoInput['user_id']=$id;
            $userInfoData=UserInfo::where('user_id',$id)->first();



            $ticket_no=1;
            $payable=0;
            if($request->student_category==1 || $request->student_category==3){
                $payable=800;
                if ($request->spouse==1){
                    $ticket_no+=1;
                    $payable+=500;
                }

                if ($request->children!=''){
                    $ticket_no+=$request->children;
                    $payable+=200*$request->children;
                }
                if ($request->exStdGuest!=''){
                    $ticket_no+=$request->exStdGuest;
                    $payable+=400*$request->exStdGuest;
                }


                $userInfoInput['ticket_no']=$ticket_no;
                $userInfoInput['payable']=$payable;
                $userInfoInput['guest_no']=$request->exStdGuest;


            }elseif($request->student_category==2){

                if ($request->class_name=='Honours' || $request->class_name=='Masters' || $request->class_name=='Eleven' || $request->class_name=='Twelve'){
                    $payable=400;
                }else{
                    $payable=200;
                }

                if ($request->runnigStdguest!=''){
                    $ticket_no+=$request->runnigStdguest;
                    $payable+=400*$request->runnigStdguest;
                }

                $userInfoInput['ticket_no']=$ticket_no;
                $userInfoInput['payable']=$payable;
                $userInfoInput['guest_no']=$request->runnigStdguest;

            }


            if ($payable!=$request->paid){
                return redirect()->back()->with('error','Received Amount Must be :Tk.'.$payable);
            }


            //$userInfoInput;

            $userInfoInput['updated_by']=Auth::user()->id;
            $userInfoData->update($userInfoInput);

            DB::commit();
            $bug=0;
        }catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
            $bug1=$e->errorInfo[2];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Update ');
        }else{
            return redirect()->back()->with('error','Something Error Found ! '.$bug1);
        }

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
}
