<?php
// config/api_routes.php
return [
    [
        'middleware' => ['auth:api'],
        'prefix' => 'api/v1',
        'routes' => [
            [
                'method' => 'get',
                'uri' => 'get-products',
                'action' => ['App\Http\Controllers\Api\ProductController', 'getShopifyProductsList'],
                'name' => 'get-products',
            ],
            [
                'method' => 'get',
                'uri' => 'test',
                'action' => ['App\Http\Controllers\Api\ProductController', 'test'],
                'name' => 'test',
            ],
            // Add more route definitions here
        ],
    ],
    // Add more route groups if needed
];
