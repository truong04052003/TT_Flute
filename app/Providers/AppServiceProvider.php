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

use App\Services\User\UserService;
use App\Repositories\User\UserRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // đăng ký group
        $this->app->bind(GroupServiceInterface::class, GroupService::class);
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
        // đăng ký user
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
