<?php

namespace Meat;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Meat\Middleware\CheckComingSoon;

class ComingSoonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__ . '/../config/coming-soon.php', config_path('coming-soon.php')
        ]);

        $router->middleware('comingsoon', CheckComingSoon::class);


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/coming-soon.php', 'coming-soon'
        );
    }
}
