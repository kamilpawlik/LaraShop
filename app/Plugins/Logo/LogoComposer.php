<?php

namespace App\Plugins\Logo;

use Illuminate\View\View;

class LogoComposer
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
        appendContentToViewSection('logo', view('Logo::logo'), $view);
    }
}