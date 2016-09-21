<?php
namespace App\Plugins\Navigation;

use App\Providers\PluginMigrationServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

use Illuminate\Support\Facades\Blade;


class NavigationComposer
{


    public function __construct()
    {
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        appendContentToViewSection( 'navigation', view('Navigation::menu', ['items' => Menu::all()]), $view );
        appendContentToViewSection( 'html_head',  view('Navigation::head'), $view);

    }

}