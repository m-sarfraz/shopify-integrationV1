<?php
// config/api_routes.php to manage routes thorugh config
return [
    [
        'middleware' => ['auth:api'],
        'prefix' => 'api/v1',
        'routes' => [
            // get order/products list from store --production
            [
                'method' => 'get',
                'uri' => 'get-list',
                'action' => ['App\Http\Controllers\Api\ProductController', 'getOrdersOrProductsListFromShopify'],
                'name' => 'get-products',
            ],
            // get single order/product from store --production
            [
                'method' => 'get',
                'uri' => 'get-single',
                'action' => ['App\Http\Controllers\Api\ProductController', 'getSingleOrderOrProductFromShopify'],
                'name' => 'get-products',
            ],
            // create local customer on shopify --production
            [
                'method' => 'post',
                'uri' => 'check-customer-details',
                'action' => ['App\Http\Controllers\Api\CustomerController', 'createOrUpdateShopifyCustomer'],
                'name' => 'check-customer-details',
            ],
            // check for product duscount --production
            [
                'method' => 'post',
                'uri' => 'check-product-discount',
                'action' => ['App\Http\Controllers\Api\ProductController', 'checkProductDiscount'],
                'name' => 'check-product-discount',
            ],
            // create local customer against email on shopify --production
            [
                'method' => 'post',
                'uri' => 'bring-customer-details',
                'action' => ['App\Http\Controllers\Api\CustomerController', 'bringShopifyCustomerDetails'],
                'name' => 'bring-customer-details',
            ],
            // test API working with test method returning a string --dev
            [
                'method' => 'get',
                'uri' => 'test',
                'action' => ['App\Http\Controllers\Api\ProductController', 'test'],
                'name' => 'test',
            ],
            // will be Adding more route definitions here
        ],
    ],
    // Will be adding more route groups here if needed
];
