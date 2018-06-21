<?php

namespace App\Http\Controllers\Admin\Blogs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop\Blogs\Blog;
use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Repositories\BlogRepository;
use App\Shop\Blogs\Requests\CreateBlogRequest;
use App\Shop\Blogs\Requests\UpdateBlogRequest;
use App\Shop\Blogs\Transformations\BlogTransformable;
use App\Shop\Tools\UploadableTrait;
use Illuminate\Http\UploadedFile;

class BlogController extends Controller
{
    use BlogTransformable, UploadableTrait; 

    /**
     * @var BlogRepositoryInterface
     */
    private $blogRepo;

    /**
     * BlogController constructor.
     * @param BlogRepositoryInterface $blogRepository
     */
    public function __construct(BlogRepositoryInterface $blogRepository) 
    {
        $this->blogRepo = $blogRepository;        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->blogRepo->listBlogs('id');

        if (request()->has('q') && request()->input('q') != '') {
            $list = $this->blogRepo->searchBlog(request()->input('q'));
        }

        $blogs = $list->map(function (Blog $item) 
        {
            return $this->transformBlog($item);
        })->all();

        return view('admin.blogs.list', [
            'blogs' => $this->blogRepo->paginateArrayResults($blogs, 10)
        ]);
    }

      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBlogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        $data = $request->except('_token', '_method');
        $data['slug'] = str_slug($request->input('name_blog'));

        if (strpos($request->input('src_video1'), "playlist") === true) {
            $data['src_video1'] = str_replace ( "playlist" , "embed/videoseries" , $request->input('src_video1'));            
        } else{
            if (strpos($request->input('src_video1'), "watch?v=") === true) {
                $data['src_video1'] = str_replace ( "watch?v=" , "embed/" , $request->input('src_video1'));
                
            } else{
                $data['src_video1'] = $request->input('src_video1');
            }
        }
        

        

        if ($request->hasFile('cover') && $request->file('cover') instanceof UploadedFile) {
            $data['cover'] = $this->blogRepo->saveCoverImage($request->file('cover'));
        }

        $blog = $this->blogRepo->createBlog($data);
        //Funcion de guardar imagenes den blog_images
        //$this->saveBlogImages($request, $blog);

        $request->session()->flash('message', 'Create successful');
        return redirect()->route('admin.blogs.edit', $blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id) 
    {
        return view('admin.blogs.show', ['blog' => $this->blogRepo->findBlogById($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $blog  = $this->blogRepo->findBlogById($id);
        
        return view('admin.blogs.edit', [
            'blog' => $blog
                        
        ]); 
        //Se quito del JSON
        //'images' => $blog->images()->get(['src'])
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateBlogRequest $request
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, int $id)
    {
        $blog = $this->blogRepo->findBlogById($id);

        //$data = $request->except('categories', '_token', '_method');
        $data['slug'] = str_slug($request->input('name_blog'));
        $data['name_blog'] = $request->input('name_blog');
        $data['name_creator'] = $request->input('name_creator');
        $data['status'] = $request->input('status');
        $data['description'] = $request->input('description');
        $data['description_short'] = $request->input('description_short');
        //$data['src_video1'] = $request->input('src_video1');

        
        if (strpos($request->input('src_video1'), "playlist") !== false) {
            $data['src_video1'] = str_replace ( "playlist" , "embed/videoseries" , $request->input('src_video1'));            
        } elseif (strpos($request->input('src_video1'), "watch?v=") !== false) {
            $data['src_video1'] = str_replace ( "watch?v=" , "embed/" , $request->input('src_video1'));
                
        } else{
            $data['src_video1'] = $request->input('src_video1');
        }
        
 
        
        /*
        $data['src_video2'] = $request->input('src_video2');
        $data['src_video3'] = $request->input('src_video3');
        $data['src_video4'] = $request->input('src_video4');
        */
        
        
        if ($request->hasFile('cover') && $request->file('cover') instanceof UploadedFile) {
            $data['cover'] = $this->blogRepo->saveCoverImage($request->file('cover'));
        }

        //funcion que guarda las imagenes en blog_images
        //$this->saveBlogImages($request, $blog);

        $this->blogRepo->updateBlog($data, $id);

        $request->session()->flash('message', 'Update successful');

        $route = [$id];
        
        return redirect()->route('admin.blogs.edit', $route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepo->findBlogById($id);
        
        $this->blogRepo->delete($id);

        request()->session()->flash('message', 'Delete successful');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeImage(Request $request)
    {
        $this->blogRepo->deleteFile($request->only('blog', 'image'), 'uploads');
        request()->session()->flash('message', 'Image delete successful');
        //return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    /*
    //Funcion que elimina las images de blog_images
    public function removeThumbnail(Request $request)
    {
        $this->blogRepo->deleteThumb($request->input('src'));
        request()->session()->flash('message', 'Image delete successful');
        //return redirect()->back();
    }*/

    /**
     * @param Request $request
     * @param Blog $blog
     */
    /*
    private function saveBlogImages(Request $request, Blog $blog)
    {
        if ($request->hasFile('image')) {
            $this->blogRepo->saveBlogImages(collect($request->file('image')), $blog);
        }
    }
    */
    
}
