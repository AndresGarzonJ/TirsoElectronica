<?php

namespace App\Providers;

use App\Shop\Carts\Repositories\CartRepository;
use App\Shop\Carts\ShoppingCart;
use App\Shop\Categories\Category;
use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Employees\Employee;
use App\Shop\Employees\Repositories\EmployeeRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

use App\Shop\Contacts\Contact;
use App\Shop\Contacts\Repositories\ContactRepository;

use App\Shop\Blogs\Blog;
use App\Shop\Blogs\Repositories\BlogRepository;

/**
 * Class GlobalTemplateServiceProvider
 * @package App\Providers 
 * @codeCoverageIgnore
 */
class GlobalTemplateServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin.app', function ($view) {
            $view->with('user', Auth::guard('admin')->user());
            $view->with('admin', $this->isAdmin(Auth::guard('admin')->user()));
        });

        view()->composer(['layouts.front.app', 'front.categories.sidebar-category'], function ($view) {
            $view->with('categories', $this->getCategories());
            $view->with('cartCount', $this->getCartCount());
            $view->with('contact', $this->getContact());
        });

        view()->composer(['layouts.front.category-nav'], function ($view) {
            $view->with('categories', $this->getCategories());
        });

        view()->composer('layouts.front.footer', function ($view) {
            $view->with('contact', $this->getContact());
        }); 

        view()->composer('layouts.front.blog-side-right', function ($view) {
            $view->with('recentBlogs', $this->getRecentBlogs());
            $view->with('countBlogsAnioMes', $this->getCountBlogsAnioMes());
            $view->with('blogsAnioMes', $this->getBlogsAnioMes());
        });
    }

    /**
     * Get all the categories
     *
     */
    private function getCategories()
    {
        $categoryRepo = new CategoryRepository(new Category);
        return $categoryRepo->listCategories('name', 'asc', 1)->whereIn('parent_id', [1]); 
    }

    /**
     * Get informacion de contacto
     *
     */
    private function getContact()
    {
        $contactRepo = new ContactRepository(new Contact);
        return $contactRepo->findContactById(1);
    }

    /**
     * Get los blogs recientes
     *
     */
    private function getRecentBlogs()
    {
        $blogRepo = new BlogRepository(new Blog);
        $listRecentBlogs = $blogRepo->listNBlogs(1,4);        
        return $listRecentBlogs;
    }
    
    /**
     * Get numero de blog por mes y anio
     *
     */
    private function getCountBlogsAnioMes()
    {
        $blogRepo = new BlogRepository(new Blog);
        $countBlogsAnioMes = $blogRepo->countBlogsMonthYear();
        return $countBlogsAnioMes;
    }

    /**
     * Get blogs por mes y anio
     *
     */
    private function getBlogsAnioMes()
    {
        $blogRepo = new BlogRepository(new Blog);
        $blogsAnioMes = $blogRepo->blogsMonthYear();
        return $blogsAnioMes;
    }

    /**
     * @return int
     */
    private function getCartCount()
    {
        $cartRepo = new CartRepository(new ShoppingCart);
        return $cartRepo->countItems();
    }

    /**
     * @param Employee $employee
     * @return bool
     */
    private function isAdmin(Employee $employee)
    {
        $employeeRepo = new EmployeeRepository($employee);
        return $employeeRepo->hasRole('admin');
    }
}
