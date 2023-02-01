<?php

namespace App\Providers;
// GROUP
use App\Services\Group\GroupService;
use App\Services\Group\GroupServiceInterface;

use App\Repositories\Group\GroupRepository;
use App\Repositories\Group\GroupRepositoryInterface;

use App\Services\User\UserServiceInterface;
use App\Repositories\User\UserRepositoryInterface;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
/* CategoryService */
use App\Services\Category\CategoryServiceInterface;
use App\Services\Category\CategoryService;
/* CategoryRepository */
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
/* CustomerService */
use App\Services\Customer\CustomerServiceInterface;
use App\Services\Customer\CustomerService;
/* CustomerRepository */
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Repositories\Customer\CustomerRepository;
/* ProductService */
use App\Services\Product\ProductServiceInterface;
use App\Services\Product\ProductService;
/* ProductRepository */
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
=======

use App\Services\User\UserService;
use App\Repositories\User\UserRepository;


>>>>>>> f9541a9b6c4327e88c547ea7a06d3793514f2bf3
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        /* singleton Services*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);     
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);     
        /* singleton Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
=======
        // đăng ký group
        $this->app->bind(GroupServiceInterface::class, GroupService::class);
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
        // đăng ký user
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
>>>>>>> f9541a9b6c4327e88c547ea7a06d3793514f2bf3
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
