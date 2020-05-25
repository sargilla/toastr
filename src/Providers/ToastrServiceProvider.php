<?php

namespace Sargilla\Toastr\Providers;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{


    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('toastr', function()
        {
            return $this->app->make('\Sargilla\Toastr\Toastr');
        });    
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'toastr');
    }

}
