<?php
namespace App\Repositories\OrderRepositories;

use App\Http\Controllers\ResponseController;
use App\Http\Helpers\Helper;
use App\Traits\ShopifyAPICall;
use Config;

class EloquentOrderRepository implements OrderRepositoryInterface
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

    public function createOrder($data)
    {
return $data;
        $headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $this->accessToken,
        ];
        // Define the API endpoint for creating customer with post request
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/orders.json";

        // Email does not exist in the response create a new customer
        $payload = ["order" => [
            "email" => $data['email'],
            "line_items" => [
                [
                    "variant_id" => 41976893833399,
                    "title" => 'Front Rear Ceramic Brake  SRT-4',
                    "price" => 10.00,
                    'grams' => 1200,
                    "quantity" => 2,
                ],
            ],
            "tax_lines" => [
                [
                    "price" => 13.5,
                    "rate" => 0.06,
                    "title" => "State tax",
                ],
            ],
            "transactions" => [
                [
                    "kind" => "sale",
                    "status" => "success",
                    "amount" => 238.47,
                ],
            ],
            "total_tax" => 13.5,
            "currency" => "EUR",
            //   [
            //      "product_id" => 4772854497463,
            //      "title"=>'Front Rear Ceramic Brake  SRT-4',
            //      "price"=>10.00,
            //      'grams'=> 1200,
            //      "quantity"   => 2,
            //   ],
            "financial_status" => "pending",

        ]];

        // Optionally, you can convert the array to JSON if needed
        // $payload = json_encode($payload);

        // Now $payload contains the array of parameters equivalent to the cURL command.

        // Make the API call using your existing function
        $apiResponse = $this->makeAnAPICallToShopify('POST', $endpoint, null, $headers, $payload);
        return $apiResponse;
    }

    public function verifyZipCode($data)
    {
        $state = $data['state'];
        $zipCode = $data['zipCode'];
        $checkIFExist = Helper::verifyZipCodesHelper($state, $zipCode);
        if ($checkIFExist) {
            return 'all Good';
        } else {
            return 'nothing Good';
        }
    }
}
