<?php

namespace enamlima\schoolconnect;

use Illuminate\Support\ServiceProvider;

class SchoolConnectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'schoolconnect');

        include __DIR__.'/routes/web.php';

        if ($this->app->runningInConsole()) {
            //$this->publishes([__DIR__.'/../config' => config_path()], 'schoolconnect-config');
            //$this->publishes([__DIR__.'/../resources/lang' => resource_path('lang')], 'schoolconnect-lang');
            //$this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/schoolconnect')], 'schoolconnect-views');
            //$this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')], 'schoolconnect-migrations');
            $this->publishes([__DIR__.'/../resources/assets' => public_path('vendor/schoolconnect')], 'schoolconnect-assets');
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
