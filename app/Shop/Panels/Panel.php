<?php 

namespace App\Shop\Panels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panel extends Model
{
    
        
        protected $fillable = [
            'title',
            'location_image', 
            'imagen',
            'description1',
            'description2',
            'text_btn_link', 
            'link'
                 
        ];
        protected $hidden = [];
        

        
}
