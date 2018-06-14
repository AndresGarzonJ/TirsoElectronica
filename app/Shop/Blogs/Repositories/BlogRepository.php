<?php 

namespace App\Shop\Blogs\Repositories;

use App\Shop\BlogImages\BlogImage;
use App\Shop\Base\BaseRepository;
use App\Shop\Blogs\Exceptions\BlogInvalidArgumentException;
use App\Shop\Blogs\Exceptions\BlogNotFoundException;
use App\Shop\Blogs\Blog;
use App\Shop\Blogs\Repositories\Interfaces\BlogRepositoryInterface;
use App\Shop\Blogs\Transformations\BlogTransformable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;





class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    use BlogTransformable;

    /**
     * BlogRepository constructor.
     * @param Blog $blog
     */
    public function __construct(Blog $blog)
    {
        parent::__construct($blog);
        $this->model = $blog;
    }

    /**
     * List all the blogs
     * 
     * @param string $order
     * @param string $sort  
     * @param array $columns
     * @return Collection
     */
    public function listBlogs(string $order = 'id', string $sort = 'desc', array $columns = ['*']) : Collection
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * List N the blogs
     * 
     * @param string $order
     * @param string $sort 
     * @param array $columns
     * @param int $nBlogs
     * @return Collection
     */
    public function listNBlogs(int $nBlogs = 6, string $order = 'id', string $sort = 'desc', array $columns = ['*']) : Collection
    {
        return $this->all($columns, $order, $sort)->take($nBlogs);
    }

    /**
     * Create the blog
     *
     * @param array $params
     * @return Blog
     */
    public function createBlog(array $params) : Blog
    {
        try {
            $blog = new Blog($params);
            $blog->save();
            return $blog;
        } catch (QueryException $e) {
            throw new BlogInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Update the blog
     *
     * @param array $params
     * @param int $id
     * @return bool
     */
    public function updateBlog(array $params, int $id) : bool
    {
        try {
            return $this->update($params, $id);
        } catch (QueryException $e) {
            throw new BlogInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Find the blog by ID
     *
     * @param int $id
     * @return Blog
     */
    public function findBlogById(int $id) : Blog
    {
        try {
            return $this->transformblog($this->findOneOrFail($id));
        } catch (ModelNotFoundException $e) {
            throw new BlogNotFoundException($e->getMessage());
        }
    }

    /**
     * Delete the blog
     *
     * @param Blog $blog
     * @return bool
     */
    public function deleteBlog(Blog $blog) : bool
    {
        return $blog->delete();
    }    

    /**
     * @param $file
     * @param null $disk
     * @return bool
     */
    public function deleteFile(array $file, $disk = null) : bool
    {
        return $this->update(['cover' => null], $file['blog']);
    }

    

    /**
     * Get the blog via slug
     *
     * @param array $slug
     * @return Blog
     */
    public function findBlogBySlug(array $slug) : Blog
    {
        try {
            return $this->findOneByOrFail($slug);
        } catch (ModelNotFoundException $e) {
            throw new BlogNotFoundException($e->getMessage());
        }
    }

    /**
     * @param string $text
     * @return mixed
     */
    public function searchBlog(string $text) : Collection
    {
        return $this->model->searchBlog($text);
    }

    /**
     * @param UploadedFile $file
     * @return string
     */
    public function saveCoverImage(UploadedFile $file) : string
    {
        return $file->store('blogs', ['disk' => 'public']);
    }

    //Funciones de la tabla blog_images
    /**
     * @return mixed
     */
    /*
    public function findBlogImages() : Collection
    {
        return $this->model->images()->get();
    }   
    */ 

    /**
     * @param string $src
     * @return bool
     */
    /*
    public function deleteThumb(string $src) : bool
    {
        return DB::table('blog_images')->where('src', $src)->delete();
    }
    */

    /**
     * @param Collection $collection
     * @param Blog $blog
     * @return Collection
     */
    /*
    public function saveBlogImages(Collection $collection, Blog $blog)
    {
        $collection->each(function (UploadedFile $file) use ($blog) {
            $filename = $file->store('blogs', ['disk' => 'public']);
            $blogImage = new BlogImage([
                'blog_id' => $blog->id,
                'src' => $filename
            ]);
            $blog->images()->save($blogImage);
        });
    }
    */
}
