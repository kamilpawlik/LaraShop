<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Extensions\ViewParts;

class ViewPartsManagerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Extensions\ViewParts::class, function ($app) {
            return new ViewParts();
        });

        $this->app->bind(\App\Extensions\ViewPartsManager::class, function ($app) {
            return new \App\Extensions\ViewPartsManager($app->make(\App\Extensions\ViewParts::class));
        });
    }
}
