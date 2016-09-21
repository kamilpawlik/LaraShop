<?php

namespace App\Plugins\Hero;

use Illuminate\View\View;

class HeroComposer
{

    public function __construct()
    {
        //
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        appendContentToViewSection('hero', view('Hero::hero'), $view);
    }
}