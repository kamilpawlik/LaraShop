<?php

namespace App\Plugins\FeaturedProducts;

use Illuminate\View\View;

class FeaturedProductsComposer
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
        appendContentToViewSection('featured_products', view('FeaturedProducts::featured-products'), $view);
    }
}