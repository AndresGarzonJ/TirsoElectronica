<?php

namespace App\Shop\Blogs\Transformations;

use App\Shop\Blogs\Blog;
use Illuminate\Support\Facades\Storage;
 
trait BlogTransformable
{
    /**
     * Transform the blog
     *
     * @param Blog $blog
     * @return Blog
     */
    protected function transformBlog(Blog $blog)
    {
        $file = Storage::disk('public')->exists($blog->cover) ? $blog->cover : null;

        $blg = new Blog;
        $blg->id = (int) $blog->id;
        $blg->name_blog = $blog->name_blog;
        $blg->name_creator = $blog->name_creator;
        $blg->slug = $blog->slug;
        $blg->description = $blog->description;
        $blg->cover = $file;
        $blg->src_video1 = $blog->src_video1;
        $blg->src_video2 = $blog->src_video2;
        $blg->src_video3 = $blog->src_video3;
        $blg->src_video4 = $blog->src_video4;
        $blg->status = $blog->status;

        return $blg;
    }
}