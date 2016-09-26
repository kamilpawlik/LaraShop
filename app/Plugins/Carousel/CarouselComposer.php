<?php

namespace App\Plugins\Carousel;

use App\Extensions\ViewPartsManager;
use Illuminate\View\View;

class CarouselComposer
{

    private $viewPartsManager;

    public function __construct(ViewPartsManager $viewPartsManager)
    {
        $this->viewPartsManager = $viewPartsManager;
    }


    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->viewPartsManager->addContent(view('Carousel::carousel'))
            ->toSection('carousel')
            ->withPriority(0)
            ->execute($view);
    }
}