<?php 

namespace App\Shop\Blogs; 

//use App\Shop\Categories\Category;
//use App\Shop\ProductAttributes\ProductAttribute;
use App\Shop\BlogImages\BlogImage;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Support\Collection;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Eloquence;
    
    protected $searchableColumns = ['name_blog', 'description_short'];

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
        'description_short',
        'cover',
        'src_video1',
        'status'        
    ];
    //Se quito unas variables de scr_video 2-4 


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @param string $term
     * @return Collection
     */
    public function searchBlog(string $term) : Collection
    {
        return self::search($term)->get();
    } 


    /**
     * Get the identifier of the Buyable item.
     *
     * @param null $options
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @param null $options
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->name_blog;
    }

        

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /*
    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }
    */

}