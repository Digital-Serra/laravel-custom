<?php

namespace App\Providers;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          UserRepositoryInterface::class,
          UserRepositoryEloquent::class
        );
    }
}
