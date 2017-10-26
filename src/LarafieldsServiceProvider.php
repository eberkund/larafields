<?php

namespace Eberkund\Larafields;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LarafieldsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/Config/larafields.php' => config_path('larafields.php'),
        ], 'larafields-config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'larafields');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/larafields'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'larafields');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/larafields'),
        ], 'larafields-views');

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/larafields'),
        ], 'larafields-assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\LarafieldsCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/larafields.php',
            'larafields'
        );
    }
}
