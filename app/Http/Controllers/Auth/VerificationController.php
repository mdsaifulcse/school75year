<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function updateEmail(Request $request){
        $validator = Validator::make($request->all(), [ 
            'email' => 'required|email',
        ]);   
        if ($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 403);
        }  

        try{
            $user = User::where('id',Auth::user()->id)->update(['email'=>$request->email]);

            return response()->json('Data Successfully Inserted.',201); 
        }catch(\Exception $e){
            return response(['error'=>$e->errorInfo[2],'status'=>$e->errorInfo[1]],409);
        }
       

    }
}
