<?php

namespace App\Shop\BlogImages;

use App\Shop\Base\BaseRepository;
use App\Shop\Blogs\Blog;

class BlogImageRepository extends BaseRepository
{
    /**
     * BlogImageRepository constructor.
     * @param BlogImage $blogImage
     */
    public function __construct(BlogImage $blogImage)
    {
        parent::__construct($blogImage);
        $this->model = $blogImage;
    }

    /**
     * @return mixed
     */
    public function findBlog() : Blog
    {
        return $this->model->blog;
    }
}
