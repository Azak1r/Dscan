<?php

namespace Azak1r\Dscan;

use Illuminate\Support\ServiceProvider;

class DscanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__. '/resources/views', 'Dscan');
        $this->loadMigrationsFrom(__DIR__. '/Database/migrations');

        $this->publishes([
        __DIR__.'/resources/views' => resource_path('views/vendor/Dscan'),
    ], 'views');

        $this->publishes([
        __DIR__ . '/Database/migrations' => $this->app->databasePath() . '/migrations'
    ], 'migrations');

        $this->publishes([
        __DIR__ . '/Database/seeds' => $this->app->databasePath() . '/seeds'
    ], 'seeds');
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__. '/routes/web.php';
        $this->app->make('Azak1r\Dscan\Http\Controllers\DscanController');
    }
}
