<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;

use App\Shop\Products\Product;
use App\Shop\Products\Repositories\Interfaces\ProductRepositoryInterface;
use App\Shop\Products\Transformations\ProductTransformable;

class CategoryController extends Controller
{
    use ProductTransformable;

    /**
     * @var ProductRepositoryInterface
     * @var CategoryRepositoryInterface
     */
    private $productRepo;
    private $categoryRepo;

    /**
     * CategoryController constructor.
     * @param ProductRepositoryInterface $productRepository
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, ProductRepositoryInterface $productRepository)
    {
        $this->categoryRepo = $categoryRepository;
        $this->productRepo = $productRepository;
    }

    /**
     * Find the category via the slug
     * 
     * @param string $slug
     * @return \App\Shop\Categories\Category
     */
    public function getCategory(string $slug)
    {
        $category = $this->categoryRepo->findCategoryBySlug(['slug' => $slug]);

        $repo = new CategoryRepository($category);
        $products = $repo->findProducts();

        $list_products_sidebar = $this->productRepo->customProductSearch(4,'all_products');
        $products_sidebar = $list_products_sidebar->map(function (Product $item) {
                return $this->transformProduct($item);
        });

        

        return view('front.categories.category', [
            'category' => $category,
            'products' => $this->categoryRepo->paginateArrayResults($products->all(), 10),
            'products_sidebar' => $products_sidebar
        ]);


    }

    /**
     * Find the Novelty via the slug
     * 
     * @param string $slug
     * @return \App\Shop\Categories\Category
     */
    public function getNovelty(string $slug)
    {
        //Busqueda para productos recientes con o sin etiqueta 
        //101010 numero de productos
        //$slug="all_products" cuando quiera traer todos los productos sin importar la etiqueta
        $productsNovelty = $this->productRepo->customProductSearch(101010,$slug);
        $products = $productsNovelty->map(function (Product $item) {
                return $this->transformProduct($item);
        });

        $list_products_sidebar = $this->productRepo->customProductSearch(4,'all_products');
        $products_sidebar = $list_products_sidebar->map(function (Product $item) {
                return $this->transformProduct($item);
        });

        return view('front.categories.category', [
            'nameNovelty' => $slug,
            'products' => $this->categoryRepo->paginateArrayResults($products->all(), 10),
            'products_sidebar' => $products_sidebar
        ]);

        
    }
}
