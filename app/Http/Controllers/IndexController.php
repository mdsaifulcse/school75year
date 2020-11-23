<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\is_rejected;
use Illuminate\Http\Request;
use App\Model\UserInfo;
use App\Model\District;
use App\Model\ThanaUpazila;
use App\Model\Union;
use App\Model\Batch;
use App\Model\Village;
use App\Model\StudentPayment;
use Auth,Response,PDF,Session,Validator,DB;
use App\Model\Branch;
use App\User;
use Mail;
use Yajra\Datatables\Datatables;
use App\JWT;

class IndexController extends Controller
{


    public function comingSoon()
    {
    	return view('backend.extraPage.comingSoon');
    }

    public function index()
    {

    	$batches =Batch::orderBy('serial_num','asc')->where('id','!=',1)->pluck('batch_name','id');
    	$district =District::orderBy('serial_num','asc')->pluck('district','id');

    	return view('client/index',compact('batches','district'));
    }

    protected function uniqueUserValidation($data,$userID=null){

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



    protected function loadThanaUpazila($district_id=null){
        if($district_id!=null){
            $thanUpazilas = ThanaUpazila::where('district_id',$district_id)->pluck('thana_upazila','id');
        }else{
            $thanUpazilas = [];
        }
        return view('client.load-data.load-thana',compact('thanUpazilas'));
    }

    protected function loadUnions($thana_id=null){
        if($thana_id!=null){
            $unions = Union::where('thana_upazila_id',$thana_id)->pluck('union','id');
        }else{
            $unions = [];
        }
        return view('client.load-data.load-union',compact('unions'));
    }

    protected function loadVillages($union_id=null){
            if($union_id!=null){
                $villages = Village::where('union_id',$union_id)->pluck('village','id');
            }else{
                $villages = [];
            }
            return view('client.load-data.load-village',compact('villages'));
        }


    public function registration(Request $request){


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
            //'image' => 'required',
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
             // ticket & fee calculation -------------------
            $ticket_no=1;
            $payable=0;
            if($request->student_category==1){
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


            //return $request;;


            $userInfoInput['user_id']=$data->id;
            $userInfoInput['payment_date']=date('Y-m-d');
            $userInfoInput['created_by']=$data->id;

            if ($request->spouse==''){
                $userInfoInput['spouse']=0;
            }

            //return $userInfoInput;

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




    protected function getRegistrationStatus($mobile,$code){


        $user = User::where('mobile_no',$mobile)->first();
        if (empty($user)) {
            return Response::json(['data' => '',]);
        }

        if (\Hash::check($code, $user->password)) {
            if (Auth::attempt([
                'mobile_no' => $mobile,
                'password' => $code
            ])) ;
            Auth::login($user);
            $data = Auth::user();

            if (!empty($data)){
                $data = UserInfo::join('users', 'users.id', 'user_infos.user_id')->where('user_id', $data->id)->first();
        }
            Auth::logout();

        }else{
            $data='';
        }


        return Response::json(['data'=>$data,]);
    }



    public function login(Request $request)
    {
        if(\Auth::check()){
            \Auth::logout();
            //return redirect()->back();
        }
        if(\Session::has('status')){
            $otpCode= \Session::get('otp_code');
            $email = $otpCode['email'];
            $otp = $otpCode['otp'];
            $user = User::where('email',$email)->first();
            $msg = $otp." 
[OTP for password reset action]";
            if(\Session::has('reset_token')){
                $token = \Session::get('reset_token');
                User::where('email',$email)->update(['reset_token'=>$token]);
            }
            //$result = \SMS::single($user->mobile_no,$msg);
            \Session::forget('otp_code');
            \Session::forget('reset_token');
            return redirect('password-otp-validation?email='.$email)->with('success','Please check your valid email address for password reset link & OTP code. You can reset your password by clicking link or using OTP code.');
        }

        return view('auth/login');
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/');
    }


    public function showAllRegistrationData($status=null){

        $allStudents=User::leftjoin('user_infos','users.id','user_infos.user_id')
            ->leftjoin('batch','batch.id','user_infos.batch_id')
            ->leftjoin('villages','villages.id','user_infos.village_id')
            ->leftjoin('unions','unions.id','user_infos.union_id')
            ->select('batch.batch_name','user_infos.batch_id','user_infos.class_name','villages.village','unions.union','user_infos.status','user_infos.father_name',
                'user_infos.payable','user_infos.paid','user_infos.dues','users.*')
            ->where('users.type',2)->orderBy('users.id','desc');


        return DataTables::of($allStudents)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('batch_name','@if($batch_id==1)
                <span> {{$class_name}} </span>
            @else
           <span> {{$batch_name}} </span>
            @endif
            ')
            ->addColumn('Status','
                    <span style="text-align: center">
                    @if($status==0)
                        <span class="btn btn-warning btn-sm">Pending <i class="fa fa-clock-o" aria-hidden="true"></i></span>    
                        @elseif($status==1)
                        <span class="btn btn-info btn-sm">Partial Approve</span>
                        @elseif($status==2)
                        
                        <span class="btn btn-success btn-sm"> Reg. Complete <i class="fa fa-check" aria-hidden="true"></i>
                        @elseif($status==3)
                        
                        <span class="btn btn-danger btn-sm">Rejected <i class="fa fa-times" aria-hidden="true"></i></span>
                       
                    @endif
                    </span>
            '
            )
            ->rawColumns(['Status','DT_RowIndex','batch_name'])
            ->toJson();
    }

}
