<?php 

namespace App\Shop\Blogs;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $searchableColumns = ['name_blog', 'description'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'name_blog',
        'name_creator',
        'slug', 
        'description',
        'cover',
        'src_video1',
        'src_video2',
        'src_video3',
        'src_video4'        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}