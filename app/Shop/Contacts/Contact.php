<?php

namespace App\Shop\Contacts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{   
    protected $fillable = [
        'cover',
        'name_proprietary',  
        'name_enterprise',
        'description', 
        'address',
        'e_mail',
        'telephone_number_1',
        'telephone_number_2',
        'telephone_number_3',
        'profile_youtube',
        'profile_twitter',
        'profile_mercadolibre',
        'profile_facebook',
             
    ];
    protected $hidden = []; 
}
  