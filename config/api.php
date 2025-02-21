<?php

return [
    'product' => [
        'url' => env('API_PRODUCT_URL', 'http://localhost'),
        'shared_token' => env('API_PRODUCT_SHARED_TOKEN', 'secret_token')
    ]
];
