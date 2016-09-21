<?php

return [

    'name' => 'Logo',
    
    'view' => [
        'composers' => [
            'layout' => \App\Plugins\Logo\LogoComposer::class
        ],
        'paths' => ['views'],
    ]
];