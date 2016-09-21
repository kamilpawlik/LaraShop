<?php

namespace App\Providers;

use Config;
use Illuminate\Support\ServiceProvider;
use View;

class ThemeServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::addLocation(theme_path());
        
        View::share('theme_path', '/' . theme_name());
        View::share('css_path', '/' . theme_name() . '/css');
        View::share('js_path', '/' . theme_name() . '/js');
        View::share('img_path', '/' . theme_name() . '/img');
        View::share('font_path', '/' . theme_name() . '/fonts');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
