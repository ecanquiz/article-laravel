<?php

return [    
    'app' => [
        'shared_token' => env('APP_API_SHARED_TOKEN', 'secret_token')        
    ],
    'static_assets' => [
        'url' => env('API_STATIC_ASSETS_URL', 'http://localhost'),
        'client_name' => env('API_STATIC_ASSETS_CLIENT_NAME', 'client_name'),
        'shared_token' => env('API_STATIC_ASSETS_SHARED_TOKEN', 'secret_token')     
    ]
];
