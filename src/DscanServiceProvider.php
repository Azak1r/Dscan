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
        $this->loadViewsFrom(__DIR__. '/views', 'dscan');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__. '/routes/web.php';
        $this->app->make('Azak1r\Dscan\DscanController');
    }
}
