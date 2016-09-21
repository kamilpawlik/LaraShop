<?php

namespace App\Plugins\FeaturedProducts;

use App\Product;

class FeaturedProduct extends Product
{
    public static function getFeaured($count = 8) {
        return Product::where('featured' , 1)->take($count);
    }
}
