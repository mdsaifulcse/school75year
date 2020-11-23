<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PrimaryInfo extends Model
{
    protected $table='primary_info';
    protected $fillable=['company_name','logo','logo_ban','address','mobile_no','email','favicon','description','form_fee',

        'meta_description','type','map_embed','company_name_ban','address_ban','mobile_no_ban','language_name','description_ban','meta_description_ban'];
}
