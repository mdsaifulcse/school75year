<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table='batch';
    protected $fillable=['batch_name','status','serial_num','created_by','updated_by'];
}
