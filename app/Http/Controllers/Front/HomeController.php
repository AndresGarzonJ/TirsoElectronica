<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Shop\Products\Repositories\Interfaces\ProductRepositoryInterface;
use App\Shop\Products\Transformations\ProductTransformable;
use App\Shop\Products\Product;

use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Transformations\BlogTransformable;
use App\Shop\Blogs\Blog;

use App\Shop\Contacts\Repositories\Interfaces\ContactRepositoryInterface;
use App\Shop\Contacts\Transformations\ContactTransformable;
use App\Shop\Contacts\Contact;
 

class HomeController extends Controller
{
    use ProductTransformable;
    use BlogTransformable;
    use ContactTransformable;

    /**
     * @var CategoryRepositoryInterface
     * @var BlogRepositoryInterface
     * @var ProductRepositoryInterface
     * @var ContactRepositoryInterface
     */
    private $categoryRepo;
    private $blogRepo; 
    private $productRepo; 
    private $contactRepo; 


    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param BlogRepositoryInterface $blogRepository
     * @param ProductRepositoryInterface $productRepository
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, BlogRepositoryInterface $blogRepository, ProductRepositoryInterface $productRepository, ContactRepositoryInterface $contactRepository)
    {
        $this->categoryRepo = $categoryRepository;
        $this->blogRepo = $blogRepository;
        $this->productRepo = $productRepository;
        $this->contactRepo = $contactRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */ 
    public function index() 
    { 
        $productsTags = $this->productRepo->productsTags();
  
        $panels = DB::table('panels')->get();

        $list = $this->blogRepo->listNBlogs(1,6);
        $blogs = $list->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        return view('front.index', compact('productsTags','blogs','panels')); 

        /*paginacion al seccion productos destacados Index

        return view(
            'front.index', 
            compact('blogs','panels'),
            ['productsTags' => $this->productRepo->paginateArrayResults($productsTags, 6)]);
                   
        */



    } 

    /*public function indexVista()
    {
        return view('index');
    }*/

    /**
     * vista principal de tienda
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tienda(){

        
        //$category2 = $this->categoryRepo->findCategoryById(2);
        //$category3 = $this->categoryRepo->findCategoryById(3); 
        // Solo devuelvo los de categoria 3, por eso es que 
        // solo llegan 5. 
        //$newests = $category2->products;
        //$features = $category3->products;

        $productsTags = $this->productRepo->productsTags();

        $listAllCategories = $this->categoryRepo->listCategories('name', 'asc', 1)->whereIn('parent_id', [1]);

        return view('front.tienda', compact('productsTags', 'listAllCategories'));

    }

    /** 
     * Vista principal de blogs/tutoriales
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function vistaPrincipalBlogs(){ 

        $list = $this->blogRepo->listBlogs_with_status();
        $blogs = $list->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        
        /*
        $listRecentBlogs = $this->blogRepo->listNBlogs(1,4);
        $recentBlogs = $listRecentBlogs->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        compact('recentBlogs')
        */

        return view('front.tutoriales', [
                'blogs' => $this->blogRepo->paginateArrayResults($blogs->all(), 6)
            ],compact('countBlogsAnioMes')            
        );

    }   

    /**
     * Vista principal de pagina de contacto
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function vistaContacto(){

        $contact = $this->contactRepo->findContactById(1);
        return view('front.contacto',compact('contact'));
    }


} 
