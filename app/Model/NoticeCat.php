<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NoticeCat extends Model
{
    protected $table='notice_cat';
    protected $fillable=['cat_name','keyword','cat_name_ban'];


    public function notieCat(){

        return $this->belongsTo(Notice::class,'id','fk_notice_cat');

    }
}
