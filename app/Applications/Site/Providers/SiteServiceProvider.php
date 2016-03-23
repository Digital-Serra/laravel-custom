<?php
namespace App\Applications\Site\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SiteServiceProvider extends ServiceProvider
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
            ['namespace' => 'App\Applications\Site\Http\Controllers'],
            function ($router) {
                require app_path('app/Applications/Site/Http/routes.php');
            }
        );
    }
}