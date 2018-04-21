<?php

//Modificar para crear el campo de N° de caja

namespace App\Shop\Products\Transformations;

use App\Shop\Products\Product;
use Illuminate\Support\Facades\Storage;

trait ProductTransformable
{
    /**
     * Transform the product
     *
     * @param Product $product
     * @return Product
     */
    protected function transformProduct(Product $product)
    {
        $file = Storage::disk('public')->exists($product->cover) ? $product->cover : null;

        $prod = new Product;
        $prod->id = (int) $product->id;
        $prod->name = $product->name;
        $prod->nBox = $product->nBox;        
        $prod->sku = $product->sku;
        $prod->slug = $product->slug;
        $prod->description = $product->description;
        $prod->cover = $file;
        $prod->quantity = $product->quantity;
        $prod->price = $product->price;
        $prod->status = $product->status;

        return $prod;
    }
}
