<?php

return [

    'name' => 'Navigation',
    
    'view' => [
        'composers' => [
            'layout' => \App\Plugins\Navigation\NavigationComposer::class
        ],
        'paths' => ['views'],
    ],
    
    'providers' => [
        
    ]
];