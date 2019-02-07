<?php
//Agregar campo tabla Productos 
//Modificar para crear el campo de N° de caja 
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
use App\Shop\Products\Product;
use Illuminate\Http\UploadedFile;

$factory->define(Product::class, function (Faker\Generator $faker) {
    $product = $faker->unique()->sentence;
    $file = UploadedFile::fake()->image('product.png', 600, 600);

    return [
        'sku' => $this->faker->numberBetween(1111111, 999999),
        'name' => $product,
        'nBox' => "numcaja-123",
        'link_mercadoLibre' => "https://articulo.mercadolibre.com.co/MCO-463639022-parlantes-genius-sp-u115-_JM?quantity=1#reco_item_pos=3&reco_backend=l3-l7-v2p-ngrams-unified-model&reco_backend_type=function&reco_client=navigation_homes&reco_id=87be4fc9-5df4-42c5-bd5d-a41400dc33a8&c_id=/home/navigation-recommendations/element&c_element_order=4",
        'discount' => 20,
        'tag' => "Nuevo",        
        'slug' => str_slug($product),
        'description' => $this->faker->paragraph,
        'cover' => $file->store('products', ['disk' => 'public']),
        'quantity' => 10,
        'price' => 5.00,
        'buyprice' => 2.00,
        'status' => 1
    ];
});