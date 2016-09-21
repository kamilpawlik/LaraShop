<?php

return [

    'name' => 'Hero',
    
    'view' => [
        'composers' => [
            'home' => \App\Plugins\Hero\HeroComposer::class
        ],
        'paths' => ['views'],
    ]
];