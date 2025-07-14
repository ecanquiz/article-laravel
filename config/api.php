<?php

return [    
    'app' => [
        'shared_token' => env('APP_API_SHARED_TOKEN', 'secret_token')        
    ],
    'url_static_assets' => env('API_URL_STATIC_ASSETS', 'http://localhost')
];
