<?php
namespace App\Plugins\Navigation;

use App\Extensions\ViewPartsManager;
use Illuminate\View\View;


class NavigationComposer
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
        $this->viewPartsManager->addContent(view('Navigation::menu', ['items' => Menu::all()]))
            ->toSection('navigation')
            ->withPriority(0)
            ->execute($view);
    }

}