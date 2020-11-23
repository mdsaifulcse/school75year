<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SocialIcon extends Model
{
    protected $table='social_icons';
    protected $fillable=[  'name','url','icon_name' ];
}
