<?php
namespace App\Repositories\CustomerRepositories;

use App\Http\Controllers\ResponseController;
use App\Traits\ShopifyAPICall;
use Config;

class EloquentCustomerRepository implements CustomerRepositoryInterface
{
    // using trait and ibnjecting response controller to send generic API call
    use ShopifyAPICall;
    private $responseController;
    private $apiKey;
    private $apiSecret;
    private $storeUrl;
    private $accessToken;
    public function __construct(ResponseController $responseController)
    {
        $this->responseController = $responseController;
        // Get Shopify API credentials from your environment file
        $this->apiKey = Config::get('app.SHOPIFY_API_KEY');
        $this->apiSecret = Config::get('app.SHOPIFY_API_SECRET');
        $this->storeUrl = Config::get('app.SHOPIFY_STORE_URL');
        $this->accessToken = Config::get('app.SHOPIFY_ACCESS_TOKEN');
    }


    public function bringCustomerDetails($data)
    {
        $email = $data['email'];
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/customers/search.json?query=email%3A$email";

        // Set the headers for the API request
        $headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $this->accessToken,
        ];
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        return $apiResponse;

    }
}
