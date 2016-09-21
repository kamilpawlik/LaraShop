<?php

return [

    'name' => 'FeaturedProducts',
    
    'view' => [
        'composers' => [
            'home' => \App\Plugins\FeaturedProducts\FeaturedProductsComposer::class
        ],
        'paths' => ['views'],
    ]
];