<?php

namespace App\Plugins\Carousel;

use Illuminate\View\View;

class CarouselComposer
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
        appendContentToViewSection('carousel', view('Carousel::carousel'), $view);
    }
}