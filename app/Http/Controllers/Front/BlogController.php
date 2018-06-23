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
        $list = $this->blogRepo->listBlogs_with_status();

        if (request()->has('q') && request()->input('q') != '') {
            $list = $this->blogRepo->searchBlog(request()->input('q'));
        }

        $blogs = $list->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        return view('front.blogs.blog-search', [
            'blogs' => $this->blogRepo->paginateArrayResults($blogs->all(), 10)
        ]);
    }
 
    /**
     * Get the blog
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug)
    {
        $blog = $this->blogRepo->findBlogBySlug(['slug' => $slug]);

        $listRecentBlogs = $this->blogRepo->listNBlogs(1,4);
        $recentBlogs = $listRecentBlogs->map(function (Blog $item) {
            return $this->transformBlog($item);
        });

        //Mostrar o no .. segun la variable status
        if ($blog->status == 1) {
            return view('front.blogs.blog', compact('blog','recentBlogs'));             
        }else{
            return view('layouts.errors.404');
        }

        
        
    }
}
 