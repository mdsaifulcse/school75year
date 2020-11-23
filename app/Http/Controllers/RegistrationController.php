<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Model\UserInfo;
use App\Model\Branch;
use Validator;
use Auth;
use DB;
use Yajra\DataTables\Html\Editor\Date;

class RegistrationController extends Controller
{
    public function index(Request $request){
    	$validator = Validator::make($request->all(), [
                    'name'  => 'required|max:20',
                    'mobile_no'  => "required|min:11|unique:users",
                    'branch' => 'required',
                ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input = $request->all();
        $code = mt_rand(100000,999999);
        $number = substr($request->mobile_no, -10);
        $number = '0'.$number;
        $msg = 'Excellent! Your seat has been reserved. Welcome to the Patronus family. Your login ID: '.$number.' & CODE: '.$code.' Browse: https://patronus.com.bd';

        $appUrl = 'Download our app : http://bit.ly/2Vcce9c';
       	$result = \SMS::single($number,$msg);
         try{
         	$input['password']=bcrypt($code);
               $data =  User::create($input);
               \DB::table('role_user')->insert(['role_id'=>4,'user_id'=>$data->id]);
                $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect("user-login?m=". $number)->with('success','Please find SMS in your mobile to get your login ID & CODE.');
            }else{
                return redirect()->back()->with('error','Something Error Found ! ');
            }

    }

    public function login(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                    'mobile_no'  => "required|min:11|exists:users",
                    'password' => 'required',
                ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('mobile_no',$request->mobile_no)->first();

        if (\Hash::check($request->password, $user->password)) {
        	if (Auth::attempt ([
                'mobile_no' => $request->mobile_no,
                'password' => $request->code
            	]));
            	Auth::login($user);

        	 return redirect("/dashboard")->with('success','Successfully Login.');
        }else{
        	 return redirect("user-login")->with('error','Does not match your ID or CODE!');
        }

    }

    public function finalRegister(Request $request){

        //return $request;
        if (isset($request->final_step)){
            $input = $request->all();
            $validator = Validator::make($input, [
                'education_meduim'=>'required|max:50',
                'second_timer'=>'required|max:50',
                'school'=>'required|max:50',
                'school_gpa'=>'required|max:50',
                'college'=>'required|max:50',
                'college_gpa'=>'required|max:50',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        if(Auth::user()->mobile_no == $request->guardian_mobile){

            return redirect()->back()->with('error','User mobile number and Guardian Mobile Number Not Same');
        }

        DB::beginTransaction();
        $input = $request->except('step');


    try{
        if(isset($request->birthday)){
            $input['birthday'] = date('Y-m-d',strtotime( $request->birthday));
        }

        $input['user_id']=Auth::user()->id;
        $user = User::findOrFail(Auth::user()->id);
        $info = UserInfo::where('user_id',Auth::user()->id)->first();

        if($info==null){
            UserInfo::create($input);
        }else{
            $info->update($input);
        }
        $userData = [];

        if ($request->hasFile('image')){
            $userData['image']=\MyHelper::photoUpload($request->file('image'),'images/users/',98,128);
            if (file_exists($user->image)){
                unlink($user->image);
            }
        }


        if(isset($request->email)){
            $userData['email'] = $request->email;
            $user->update($userData);
        }
        if(isset($request->final_step)){

            $input['payable_amount']=14250;
            $input['final_step']=1;
            $info->update($input);

            $number = \Auth::user()->mobile_no;
            $branch = Branch::findOrFail(\Auth::user()->branch);
            $msg = 'Congrats on your first step to success! Please visit our branch to complete your admission. Address:'.$branch->address.' Call us: 01701665588';
            $result = \SMS::single($number,$msg);
        }



    DB::commit();
    $bug=0;

    }catch(\Exception $e){
        DB::rollback();
        $bug=$e->errorInfo[1];
    }
     if($bug==0){
        $redirect = 'home';
         if($request->step==1){
             $redirect = 'guardians-info';
         }
        elseif($request->step==2){
             $redirect = 'educational-background';
         }elseif($request->payment_type==1){
             $redirect = 'payment';
         }
        return redirect($redirect)->with('success','Data Successfully Inserted');
    }elseif($bug==1062){
        return redirect()->back()->with('error','The Email has Duplicate entry.' .$bug);
    }else{
        return redirect()->back()->with('error','Something Error Found ! ');
    }
    }


public function personalInfo()
{
    $info = UserInfo::where('user_id',Auth::user()->id)->first();

    if(isset($info->final_step) && $info->final_step==1){
        return redirect('form');
    }

    return view('client.personalInfo',compact('info'));
}
public function guardians()
{

    $info = UserInfo::where('user_id',Auth::user()->id)->first();
    if(isset($info->final_step) && $info->final_step==1){
        return redirect('form');
    }
    return view('client.guardian',compact('info'));
}

public function educational()
{
    $info = UserInfo::where('user_id',Auth::user()->id)->first();
    if(isset($info->final_step) && $info->final_step==1){
        return redirect('form');
    }
    return view('client.educational');
}
public function forgetCode(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile_no'  => "required|min:11|exists:users",
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('mobile_no',$request->mobile_no)->first();
        if($user->code_reset_counter==0){
            return redirect()->back()->with('error','Your code reset option is no more available. Please contact with us.');
        }
        $input = $request->all();
        $code = mt_rand(100000,999999);
        $number = substr($request->mobile_no, -10);
        $number = '0'.$number;
        $msg = 'Excellent! Your seat has been reserved. Welcome to the Patronus family. Your login ID: '.$number.' & CODE: '.$code.' Download our app : http://bit.ly/2Vcce9c';
        $result = \SMS::single($number,$msg);
        $counter = $user->code_reset_counter-1;
        try{
            $password=bcrypt($code);
            $data =  $user->update(['password'=>$password,'code_reset_counter'=>$counter]);
                $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
            if($bug==0){
            return redirect("user-login?m=". $number)->with('success','Please find SMS in your mobile to get your login ID & CODE.');
            }else{
                return redirect()->back()->with('error','Something Error Found ! ');
            }


    }

    public function personalInfoEdit(){


        $info = UserInfo::where('user_id',Auth::user()->id)->first();

        return view('client.update.personalInfo',compact('info'));
    }

    public function guardiansEdit(){

        $info = UserInfo::where('user_id',Auth::user()->id)->first();
        return view('client.update.guardian',compact('info'));
    }


    public function educationalEdit(){

        $info = UserInfo::where('user_id',Auth::user()->id)->first();
        return view('client.update.educational',compact('info'));
    }

    public function finalRegisterupdate(Request $request){

        if(Auth::user()->mobile_no == $request->guardian_mobile){

            return redirect()->back()->with('error','User mobile number and Guardian Mobile Number Not Same');
        }

        DB::beginTransaction();
        $input = $request->except('step');

        try{

            $input['user_id']=Auth::user()->id;
            $input['final_step']=1;
            $user = User::findOrFail(Auth::user()->id);
            $info = UserInfo::where('user_id',Auth::user()->id)->first();

            if(isset($request->birthday)){
                $input['birthday'] = date('Y-m-d',strtotime($request->birthday));
            }



            if(isset($request->education_meduim) && $request->education_meduim=='English Medium'){
                $input['education_group'] = '';
            }



            if($info==null){
                UserInfo::create($input);
            }else{
                $info->update($input);
            }
            $userData = [];

            if ($request->hasFile('image')){
                $userData['image']=\MyHelper::photoUpload($request->file('image'),'images/users/',98,128);
                if (file_exists($user->image)){
                    unlink($user->image);
                }
            }


            if(isset($request->email)){
                $userData['email'] = $request->email;
                $user->update($userData);
            }


                DB::commit();
                $bug=0;

            }

        catch(\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            $redirect = 'home';
            if($request->step==1){
                $redirect = 'guardians-info/edit';
            }
            elseif($request->step==2){
                $redirect = 'educational-background/edit';
            }
            return redirect($redirect)->with('success','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error','The Email has already been taken.');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }


    public function uploadStudentImage(Request $request)
    {

        if ($request->file('student_img')){
            $imgUrl = \MyHelper::photoUpload($request->file('student_img'), 'images/students/', 98, 128);
        $imgUrl = asset($imgUrl);
    }else
    {
        $imgUrl='No Image Selected';
    }

        return response()->json(['imageData'=>$imgUrl],200);
    }



}
