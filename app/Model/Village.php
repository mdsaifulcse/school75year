<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table='villages';
    protected $fillable=['union_id','village','serial_num','status'];
}
