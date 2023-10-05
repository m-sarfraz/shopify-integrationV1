<?php
namespace App\Repositories\ProductRepositories;
use App\Http\Controllers\ResponseController;
use App\Traits\ShopifyAPITrait;
use Config;

class EloquentProductRepository implements ProductRepositoryInterface
{
    use ShopifyAPITrait;
    private $responseController;

    public function __construct(ResponseController $responseController)
    { 
        $this->responseController = $responseController;
    }
    public function getShopifyProducts()
    {

        // Get Shopify API credentials from your environment file
        $apiKey = Config::get('app.SHOPIFY_API_KEY');
        $apiSecret = Config::get('app.SHOPIFY_API_SECRET');
        $storeUrl = Config::get('app.SHOPIFY_STORE_URL');
        $accessToken = Config::get('app.SHOPIFY_ACCESS_TOKEN');

        // Define the API endpoint for retrieving products
        $endpoint = "https://$storeUrl/admin/api/2021-10/products.json"; // Adjust the API version as needed
        
        // Set the headers for the API request
        $headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $accessToken,
        ];

        // Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null); 
        return $apiResponse;
    }

}
