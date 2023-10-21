<?php
namespace App\Repositories\ProductRepositories;

use App\Http\Controllers\ResponseController;
use App\Traits\ShopifyAPICall;
use Config;

class EloquentProductRepository implements ProductRepositoryInterface
{
    // using trait and ibnjecting response controller to send generic API call
    use ShopifyAPICall;
    private $responseController;
    private $apiKey;
    private $apiSecret;
    private $storeUrl;
    private $accessToken;
    private $headers;
    public function __construct(ResponseController $responseController)
    {
        $this->responseController = $responseController;
        // Get Shopify API credentials from your environment file
        $this->apiKey = Config::get('app.SHOPIFY_API_KEY');
        $this->apiSecret = Config::get('app.SHOPIFY_API_SECRET');
        $this->storeUrl = Config::get('app.SHOPIFY_STORE_URL');
        $this->accessToken = Config::get('app.SHOPIFY_ACCESS_TOKEN');
        // Set the headers for the API request
        $this->headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $this->accessToken,
        ];
    }

    // get list of products or orders by calling Generic API trait
    public function getShopifyProducts($requiredList)
    {

        // Define the API endpoint for retrieving products
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/$requiredList.json"; // Adjust the API version as needed
        $headers = $this->headers;

        // Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        return $apiResponse;
    }

    // get single order or product by calling Generic API trait
    public function getSingleProductOrOrder($requiredObject, $requiredObjectID)
    {
        // Define the API endpoint for retrieving products
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/$requiredObject" . "/" . "$requiredObjectID.json"; // Adjust the API version as needed

        // Set the headers for the API request
        $headers = $this->headers;

        // Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        return $apiResponse;
    }
    // check for discounts agsint prodcut
    public function checkForShopifyDiscount($data)
    {
        // Define the API endpoint for retrieving products
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/discount_codes/lookup.json?code=testcode123"; // Adjust the API version as needed

        // Set the headers for the API request
        $headers = $this->headers;

        // Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        if (isset($apiResponse['body']['discount_code']['price_rule_id'])) {
            // Define the API endpoint for retrieving products
            $price_rule_id = $apiResponse['body']['discount_code']['price_rule_id'];
            $endpoint = "https://$this->storeUrl/admin/api/2021-10/price_rules/$price_rule_id.json";

            // Set the headers for the API request
            $headers = $this->headers;

            // Make the API call using your existing function
            $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
            $value = $apiResponse['body']['price_rule']['value'];

            return $value;
        } else {
            return 'Code Not Matched';
        }
    }

    // verify shopping details and zones and rates
    public function getShippingDetailsAndRules($data)
    {
// Define the API endpoint for retrieving products
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/shipping_zones.json"; // Adjust the API version as needed

// Set the headers for the API request
        $headers = $this->headers;

// Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        return $apiResponse;
    }

}
