<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Shop\Blogs\Blog;
use Illuminate\Http\UploadedFile;

    $factory->define(Blog::class, function (Faker\Generator $faker) {
    $blog = $faker->unique()->sentence;
    $file = UploadedFile::fake()->image('blog.png', 600, 600);

    return [
        'name_blog' => $blog,
        'name_creator' => "Andres Garzon",
        'slug' => str_slug($blog),
        'description' => $this->faker->paragraph,
        'description_short' => "ajshdas dajshdkjash d sd shdjas dhasg djhagsd ashdgahs dhasdhsdhsa jdahsd ashd jashdgh sad ahsdg ahsd ahsdgashd ashd ahsdgashd ashdashdg as dash dahsd",
        'cover' => $file->store('blogs', ['disk' => 'public']),
        'src_video1' => "https://www.youtube.com/embed/videoseries?list=PLQqX8aKGHZ3HdskDWHss9poPRecOOhjh0",        
        'status' => 1

    ];
    /*

        'src_video2' => "link video 2",
        'src_video3' => "link video 3",
        'src_video4' => "link video 4",
    */
});