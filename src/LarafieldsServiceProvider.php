<?php

namespace Eberkund\Larafields;

use Illuminate\Support\ServiceProvider;

class LarafieldsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/larafields.php' => config_path('larafields.php'),
        ], 'larafields-config');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'larafields');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/larafields'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'larafields');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/larafields'),
        ], 'larafields-views');
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
