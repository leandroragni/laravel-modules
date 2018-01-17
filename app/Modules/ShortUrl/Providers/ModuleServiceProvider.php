<?php

namespace App\Modules\ShortUrl\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'short-url');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'short-url');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'short-url');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
