<?php

namespace App\Plugins\Navigation;

use App\Configuration;
use Illuminate\Support\ServiceProvider;


class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        dd('test');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
