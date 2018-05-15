<?php 
//Este Controlador es semejante a ProductController

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Adaptado de productController
use App\Shop\Blogs\Blog;
use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Transformations\BlogTransformable;

class BlogController extends Controller
{
    use BlogTransformable;

    /**
     * @var BlogRepositoryInterface
     * 
     */
    private $blogRepo;

    /**
     * BlogController constructor.
     * @param BlogRepositoryInterface $blogRepository
     * 
     */
    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepo = $blogRepository;
        
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
       public function search()
    {
        $list = $this->productRepo->listProducts();

        if (request()->has('q') && request()->input('q') != '') {
            $list = $this->productRepo->searchProduct(request()->input('q'));
        }

        $products = $list->map(function (Product $item) {
            return $this->transformProduct($item);
        });

        return view('front.products.product-search', [
            'products' => $this->productRepo->paginateArrayResults($products->all(), 10)
        ]);
    }
 
    /**
     * Get the product
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug)
    {
        $blog = $this->blogRepo->findBlogBySlug(['slug' => $slug]);
        //$product = $this->productRepo->findProductBySlug(['slug' => $slug]);
        
        //$images = $product->images()->get();
        //El precio del producto podria variar en funcion de color / tamaño / peso entre otros atributos .. Entonces lo que se quiere es que el precio en la vista varie en funcion de sus atributos .. si los tiene.
        //$productAttributes = $product->attributes()->get();
        
        //$category2 = $this->categoryRepo->findCategoryById(2);
        //$category3 = $this->categoryRepo->findCategoryById(3); 

        //$newests = $category2->products;
        //$features = $category3->products;
        
        // categories - selectedIds -- Estas variables son necesarias para mostrar el producto a que categoria pertenece ... basado sobre la funcion edit de app/Http/Controllers/Admin/Products/ProductController para la vista de admin/products/edit .. 

        //$varCategories = $this->categoryRepo->listCategories('name', 'asc')->where('parent_id', 1);
        //$selectedIds = $product->categories()->pluck('category_id')->all();

        return view('front.blogs.blog',
            compact('blog')
        ); 
    }
}
