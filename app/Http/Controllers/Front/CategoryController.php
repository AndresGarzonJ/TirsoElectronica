<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;

use App\Shop\Products\Product;
use App\Shop\Products\Repositories\Interfaces\ProductRepositoryInterface;


class CategoryController extends Controller
{
    private $categoryRepo;
    private $productRepo;
   /** 
   *@param ProductRepositoryInterface $productRepository
   */
    public function __construct(CategoryRepositoryInterface $categoryRepository,ProductRepositoryInterface $productRepository)
    {
        $this->categoryRepo = $categoryRepository;
        $this->productRepo = $productRepository;
    }

    /**
     * Find the category via the slug
     *
     * @param string $slug
     * @param  int $id
     * @return \App\Shop\Categories\Category
     */
    public function getCategory(string $slug)
    {
        $category = $this->categoryRepo->findCategoryBySlug(['slug' => $slug]);

        $repo = new CategoryRepository($category);
        //Necesitamos traer las imagenes del producto, 

        return view('front.categories.category', [
            'category' => $category,
            'products' => $repo->findProducts()
        ]);
    }

    public function getImagesProduct(int $id){

        $product = $this->productRepo->findProductById($id);
        
      
        return $product->images()->get(['src']);

    }
}
