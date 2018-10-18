<?php 

namespace App\Shop\Panels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panel extends Model
{
    
        
        protected $fillable = [
            'titulo',
            'anio',
            'subtitulo', 
            'imagen',
            'descripcion',
            'link'
                 
        ];
        protected $hidden = [];
        

        
}
