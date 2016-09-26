<?php

namespace App\Plugins\Logo;

use Illuminate\View\View;
use App\Extensions\ViewPartsManager;

class LogoComposer
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
        $this->viewPartsManager->addContent(view('Logo::logo'))
                                ->toSection('logo')
                                ->withPriority(0)
                                ->execute($view);
    }
}