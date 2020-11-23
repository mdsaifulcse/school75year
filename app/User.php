<?php

namespace App;

use App\Model\AcademicInformation;
use App\Model\Branch;
use App\Model\UserInfo;
use App\Notifications\MailResetPasswordNotification as ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yajra\Acl\Traits\HasRole;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','name_bn', 'email', 'password','mobile_no','type','email_verified_at','address','image','code_reset_counter','status','otp_code','otp_create_time','reset_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendPasswordResetNotification($token)
    {
        // Your your own implementation.
        $this->notify(new ResetPasswordNotification($token));
    }


    public function userInfoData(){
        return $this->hasOne(UserInfo::class,'user_id','id');
    }
}
