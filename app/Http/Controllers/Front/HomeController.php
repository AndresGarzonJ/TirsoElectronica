<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Shop\Products\Transformations\ProductTransformable;
use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Transformations\BlogTransformable;
use App\Shop\Blogs\Blog;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    use ProductTransformable;
    use BlogTransformable;

    /**
     * @var CategoryRepositoryInterface
     * @var BlogRepositoryInterface
     */
    private $categoryRepo;
    private $blogRepo; 

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param BlogRepositoryInterface $blogRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, BlogRepositoryInterface $blogRepository)
    {
        $this->categoryRepo = $categoryRepository;
        $this->blogRepo = $blogRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $category2 = $this->categoryRepo->findCategoryById(2);
        $category3 = $this->categoryRepo->findCategoryById(3);

        $newests = $category2->products;
        $features = $category3->products;

        $panels = DB::table('panels')->get();
        $list = $this->blogRepo->listNBlogs(1,6);
        $blogs = $list->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        return view('front.index', compact('newests', 'features', 'category2', 'category3','blogs','panels'));
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

        
        $category2 = $this->categoryRepo->findCategoryById(2);
        $category3 = $this->categoryRepo->findCategoryById(3); // Solo devuelvo los de categoria 3, por eso es que 
                                                                // solo llegan 5.

        $newests = $category2->products;
        $features = $category3->products;

        return view('front.tienda', compact('newests', 'features', 'category2', 'category3'));

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

        
        $listRecentBlogs = $this->blogRepo->listNBlogs(1,4);
        $recentBlogs = $listRecentBlogs->map(function (Blog $item) {
            return $this->transformBlog($item);
        });
        
        return view('front.tutoriales', [
                'blogs' => $this->blogRepo->paginateArrayResults($blogs->all(), 6)
            ],
            compact('recentBlogs')
        );

    }  

    public function contacto(){


        return view('front.contacto');
    }


}
