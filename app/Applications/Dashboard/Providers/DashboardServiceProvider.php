<?php
namespace App\Applications\Dashboard\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes($this->app['router']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function registerRoutes(Router $router)
    {
        $router->group(
            ['namespace' => 'App\Applications\Dashboard\Http\Controllers'],
            function ($router) {
                require app_path('app/Applications/Dashboard/Http/routes.php');
            }
        );
    }
}