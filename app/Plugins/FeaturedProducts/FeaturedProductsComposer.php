<?php

namespace App\Plugins\FeaturedProducts;

use App\Extensions\ViewPartsManager;
use Illuminate\View\View;

class FeaturedProductsComposer
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
        $this->viewPartsManager->addContent(view('FeaturedProducts::featured-products', ['items' => FeaturedProduct::getFeaured(8)]))
            ->toSection('featured_products')
            ->withPriority(0)
            ->execute($view);

    }
}