<?php

namespace App\Providers;

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
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);
        /* singleton Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
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
