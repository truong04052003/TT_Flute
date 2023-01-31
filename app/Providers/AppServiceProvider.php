<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* CategoryService */
use App\Services\Category\CategoryServiceInterface;
use App\Services\Category\CategoryService;
/* CategoryRepository */
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* Binding Services*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        /* Binding Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
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
