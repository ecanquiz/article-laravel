<?php

return [    
    'app' => [
        'shared_token' => env('APP_API_SHARED_TOKEN', 'secret_token')        
    ],
    'static_assets' => [
        'url' => env('API_STATIC_ASSETS_URL', 'http://localhost'),
        'shared_token' => env('API_STATIC_ASSETS_SHARED_TOKEN', 'secret_token')     
    ]
];
