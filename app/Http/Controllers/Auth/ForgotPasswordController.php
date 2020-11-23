<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function passwordRestOtpGenerate(Request $request){
        date_default_timezone_set('Asia/Dhaka');
        $user = User::where('email',$request->email)->first();
        if($user!=''){
            $code = mt_rand(100000,999999);
            $date = date('Y-m-d H:i:s');
            if($user->otp_create_time!='' && $user->otp_code!=''){
                $start_date = new \DateTime($user->otp_create_time);
                $since_start = $start_date->diff(new \DateTime($date));
                $minutes = $since_start->days * 24 * 60;
                $minutes += $since_start->h * 60;
                $minutes += $since_start->i;
                if($minutes<=30){
                   $code =  $user->otp_code;
                }
            }
            $user->update(['otp_code'=>$code ,'otp_create_time'=>$date]);
            \Session::put('otp_code',['otp'=>$code,'email'=>$user->email]);
            return response()->json('Successfully generated OTP','200');
        }else{
            return response()->json('User not found!','404');
        }
    }
    public function otpValidation(Request $request){
        if(\Session::has('status')){
            $otpCode= \Session::get('otp_code');
            $email = $otpCode['email'];
            $otp = $otpCode['otp'];
            $user = User::where('email',$email)->first();
            $msg = $otp." 
[OTP for password reset action]";
            if(\Session::has('reset-token')){
                $token = \Session::get('reset-token');
                User::where('email',$email)->update(['reset_token'=>$token]);
            }
            //$result = \SMS::single($user->mobile_no,$msg);
            \Session::forget('otp_code');
            \Session::forget('reset-token');
            return redirect('password-otp-validation?email='.$email)->with('success','Please check your valid email for a rest link. Also find OTP in your mobile phone & email to reset password as well.');
        }
        if(isset($request->email)){
            $email = $request->email;
            return view('auth.passwords.otpValidation',compact('email'));
        }else{
            return redirect()->back()->with('error','Invalid Action.');
        }
    }
    public function otpValidationCheck(Request $request){
        $user = User::where(['email'=>$request->email,'otp_code'=>$request->otp_code])->first();
        if($user!=''){
            $date = date('Y-m-d H:i:s');
            $start_date = new \DateTime($user->otp_create_time);
            $since_start = $start_date->diff(new \DateTime($date));
            $minutes = $since_start->days * 24 * 60;
            $minutes += $since_start->h * 60;
            $minutes += $since_start->i;
            if($minutes<60){
                return redirect('password/reset/'.$user->reset_token.'?email='.$user->email)->with('success','OPT validation successfully done. Now reset your password.');

            }
        }
        return redirect()->back()->with('error','OTP invalid.');
    }
}
