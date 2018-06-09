<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Shop\Products\Transformations\ProductTransformable;
use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Transformations\BlogTransformable;
use App\Shop\Blogs\Blog;


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

        $list = $this->blogRepo->listNBlogs();
        $blogs = $list->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        return view('front.index', compact('newests', 'features', 'category2', 'category3','blogs'));
    }

    public function indexVista()
    {
        return view('index');
    }

    public function tienda(){

        
        $category2 = $this->categoryRepo->findCategoryById(2);
        $category3 = $this->categoryRepo->findCategoryById(3);

        $newests = $category2->products;
        $features = $category3->products;

        return view('front.tienda', compact('newests', 'features', 'category2', 'category3'));

    }

}
