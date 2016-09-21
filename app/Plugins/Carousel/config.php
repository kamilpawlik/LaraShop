<?php

return [

    'name' => 'Carousel',
    
    'view' => [
        'composers' => [
            'home' => \App\Plugins\Carousel\CarouselComposer::class
        ],
        'paths' => ['views'],
    ]
];