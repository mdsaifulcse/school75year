<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    protected $table='unions';
    protected $fillable=['thana_upazila_id','union','serial_num','status'];
}
