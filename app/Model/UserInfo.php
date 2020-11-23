<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table='user_infos';
    protected $fillable=['user_id','total','consider','payable','paid','dues','payment_method','payment_date','father_name','spouse','children','guest_no','ticket_no','student_category','class_name','batch_id','district_id',
        'thana_upazila_id','union_id','village_id','address','registration_id','serial_num','voucher_no','status','received_by','confirmed_by','created_by','updated_by'];

    public function userData(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function userInfoVillage(){
        return $this->belongsTo(Village::class,'village_id','id');
    }

    public function userInfoBatch(){
        return $this->belongsTo(Batch::class,'batch_id','id');
    }

    public function userInfoUnion(){
        return $this->belongsTo(Union::class,'union_id','id');
    }

    public function userInfoThana(){
        return $this->belongsTo(ThanaUpazila::class,'thana_upazila_id','id');
    }
    public function userInfoDist(){
        return $this->belongsTo(District::class,'district_id','id');
    }

    public function receivedBy(){
        return $this->belongsTo(User::class,'received_by','id');
    }
    public function confirmedBy(){
        return $this->belongsTo(User::class,'confirmed_by','id');
    }


}
