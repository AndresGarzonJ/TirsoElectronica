<?php 

namespace App\Shop\Blogs\Repositories\Interfaces;

//use App\Shop\AttributeValues\AttributeValue;
//use App\Shop\ProductAttributes\ProductAttribute;

use App\Shop\Base\Interfaces\BaseRepositoryInterface;
use App\Shop\Blogs\Blog;
use Illuminate\Http\UploadedFile; 
use Illuminate\Support\Collection;
use Intervention\Image\ImageManagerStatic;

interface BlogRepositoryInterface extends BaseRepositoryInterface
{
    public function listBlogs(string $order = 'id', string $sort = 'desc', array $columns = ['*']) : Collection;

    //Busqueda selectiva teniendo en cuenta el valor de status
    public function listBlogs_with_status(int $status = 1, string $order = 'id', string $sort = 'desc', array $columns = ['*']) : Collection;

    //Solo trae los 6 primeros blogs encontrados
    public function listNBlogs(int $status = 1, int $nBlogs = 6, string $order = 'id', string $sort = 'desc', array $columns = ['*']) : Collection;

    public function createBlog(array $data) : Blog;

    public function updateBlog(array $params, int $id) : bool;

    public function findBlogById(int $id) : Blog;

    public function deleteBlog(Blog $blog) : bool;   

    public function deleteFile(array $file, $disk = null) : bool;

    public function findBlogBySlug(array $slug) : Blog;

    public function searchBlog(string $text) : Collection;

    //public function saveCoverImage(ImageManagerStatic $file) : string;
    public function saveCoverImage(UploadedFile $file) : string;

    //Funciones de la tabla blog_images

    //public function saveBlogImages(Collection $collection, Blog $blog);
    //public function findBlogImages() : Collection;
    //public function deleteThumb(string $src) : bool;



        

    //Funciones que no aplican
    
    //public function detachCategories();

    //public function getCategories() : Collection;

    //public function syncCategories(array $params);

    //public function saveBlogAttributes(ProductAttribute $productAttribute) : ProductAttribute;

    //public function listBlogAttributes() : Collection;

    //public function removeBlogAttribute(ProductAttribute $productAttribute) : ?bool;

    //public function saveCombination(ProductAttribute $productAttribute, AttributeValue ...$attributeValues) : Collection;

    //public function listCombinations() : Collection;
}
