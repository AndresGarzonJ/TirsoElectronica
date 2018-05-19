<?php

namespace App\Shop\Products\Repositories;

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
     * Create the product
     *
     * @param array $params
     * @return Blog
     */
    public function createBlog(array $params) : Blog
    {
        try {
            $product = new Product($params);
            $product->save();
            return $product;
        } catch (QueryException $e) {
            throw new ProductInvalidArgumentException($e->getMessage());
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
            throw new ProductInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Find the product by ID
     *
     * @param int $id
     * @return Blog
     */
    public function findBlogById(int $id) : Blog
    {
        try {
            return $this->transformProduct($this->findOneOrFail($id));
        } catch (ModelNotFoundException $e) {
            throw new ProductNotFoundException($e->getMessage());
        }
    }

    /**
     * Delete the product
     *
     * @param Product $product
     * @return bool
     */
    public function deleteBlog(Product $product) : bool
    {
        return $product->delete();
    }    

    /**
     * @param $file
     * @param null $disk
     * @return bool
     */
    public function deleteFile(array $file, $disk = null) : bool
    {
        return $this->update(['cover' => null], $file['product']);
    }

    /**
     * @param string $src
     * @return bool
     */
    public function deleteThumb(string $src) : bool
    {
        return DB::table('product_images')->where('src', $src)->delete();
    }

    /**
     * Get the product via slug
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
        return $this->model->searchProduct($text);
    }

    /**
     * @return mixed
     */
    public function findBlogImages() : Collection
    {
        return $this->model->images()->get();
    }

    /**
     * @param UploadedFile $file
     * @return string
     */
    public function saveCoverImage(UploadedFile $file) : string
    {
        return $file->store('products', ['disk' => 'public']);
    }

    /**
     * @param Collection $collection
     * @param Product $product
     * @return Collection
     */
    public function saveProductImages(Collection $collection, Product $product)
    {
        $collection->each(function (UploadedFile $file) use ($product) {
            $filename = $file->store('products', ['disk' => 'public']);
            $productImage = new ProductImage([
                'product_id' => $product->id,
                'src' => $filename
            ]);
            $product->images()->save($productImage);
        });
    }
}
