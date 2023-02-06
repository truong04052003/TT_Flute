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
/* OrderService */
use App\Services\Order\OrderServiceInterface;
use App\Services\Order\OrderService;
/* OrderRepository */
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Order\OrderRepository;
/* ApiproductService */
use App\Services\Api\Product\ApiProductServiceInterface;
use App\Services\Api\Product\ApiProductService;
/* ApiproductRepository */
use App\Repositories\Api\Product\ApiProductRepositoryInterface;
use App\Repositories\Api\Product\ApiProductRepository;

use App\Repositories\Supplier\SupplierRepository;
use App\Repositories\Supplier\SupplierRepositoryInterface;

use App\Services\Supplier\SupplierService;
use App\Services\Supplier\SupplierServiceInterface;
use App\Services\User\UserService;
use App\Repositories\User\UserRepository;

use Illuminate\Pagination\Paginator;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* singleton Services*/
        $this->app->singleton(SupplierServiceInterface::class, SupplierService::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);     
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);     
        $this->app->singleton(OrderServiceInterface::class, OrderService::class);    
        $this->app->singleton(GroupServiceInterface::class, GroupService::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(ApiProductServiceInterface::class, ApiProductService::class);
        /* singleton Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->singleton(GroupRepositoryInterface::class, GroupRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(ApiProductRepositoryInterface::class, ApiProductRepository::class);

        $this->app->singleton(SupplierRepositoryInterface::class, SupplierRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
