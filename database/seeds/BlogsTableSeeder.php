<?php

use App\Shop\Blogs\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Blog::class)->create();
    }
}