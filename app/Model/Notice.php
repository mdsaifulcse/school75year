<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table='notices';
    protected $fillable=['title','description_ban','title_ban','description','pdf','show_popop','show_homepage','fk_notice_cat', 'date'
    ];

     public function noticecatname(){

     return $this->belongsTo(NoticeCat::class,'fk_notice_cat','id');

    }
}
