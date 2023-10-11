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

    // get list of products or orders by calling Generic API trait
    public function checkCustomerDetails($data)
    {
        $email = $data['email'];
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/customers/search.json?query=email%3A$email";

        // Set the headers for the API request
        $headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $this->accessToken,
        ];
        $apiResponse = $this->makeAnAPICallToShopify('GET', $endpoint, null, $headers, null);
        // Check if there is at least one customer in the response
        if (!empty($apiResponse['body']['customers'])) {
            $customer = $apiResponse['body']['customers'][0]; // Assuming there is only one customer
            if ($customer['email'] === $email) {
                // Email exists in the response, and $customer contains the customer's data

                // Define the API endpoint for creating customer with post request
                $endpoint = "https://$this->storeUrl/admin/api/2021-10/customers/{$customer['id']}.json";
                // return $endpoint;
                // Email does not exist in the response create a new customer
                $payload = [
                    'customer' => [
                        'id' => $customer['id'],
                        'first_name' => $data['address_first_name'],
                        'last_name' => $data['address_last_name'],
                        'email' => $data['email'],
                        // 'phone' => '++923431077718',
                        'verified_email' => true,
                        'addresses' => [
                            [
                                'address1' => $data['address'],
                                'city' => $data['city'],
                                'province' => 'ON',
                                'phone' => '555-1313',
                                'zip' => $data['zip_code'],
                                'last_name' => $data['address_last_name'],
                                'first_name' => $data['address_first_name'],
                                'country' => $data['country'],
                            ],
                            [
                                'address2' => $data['address2'],
                                'city' => $data['address2_city'],
                                'province' => 'ON',
                                'phone' => '555-1212',
                                'zip' => $data['address2_zip_code'],
                                'last_name' => $data['address2_lastName'],
                                'first_name' => $data['address2_firstName'],
                                'country' => $data['address2_country'],
                            ],
                        ],
                        'password' => 'shopify123',
                        'password_confirmation' => 'shopify123',
                        'send_email_welcome' => false,
                    ],
                ];

                // Make the API call using your existing function
                $apiResponse = $this->makeAnAPICallToShopify('PUT', $endpoint, null, $headers, $payload);
                return $apiResponse;

            } else {
                // No customers in the response
                return "Customer Exists! BUT There is an Issue with API";
            }
        } else {

            // Define the API endpoint for creating customer with post request
            $endpoint = "https://$this->storeUrl/admin/api/2021-10/customers.json";

            // Email does not exist in the response create a new customer
            $payload = [
                'customer' => [
                    'first_name' => $data['address_first_name'],
                    'last_name' => $data['address_last_name'],
                    'email' => $data['email'],
                    // 'phone' => '++923431077718',
                    'verified_email' => true,
                    'addresses' => [
                        [
                            'address1' => $data['address'],
                            'city' => $data['city'],
                            'province' => 'ON',
                            'phone' => '555-1313',
                            'zip' => $data['zip_code'],
                            'last_name' => $data['address_last_name'],
                            'first_name' => $data['address_first_name'],
                            'country' => $data['country'],
                        ],
                        [
                            'address2' => $data['address2'],
                            'city' => $data['address2_city'],
                            'province' => 'ON',
                            'phone' => '555-1212',
                            'zip' => $data['address2_zip_code'],
                            'last_name' => $data['address2_lastName'],
                            'first_name' => $data['address2_firstName'],
                            'country' => $data['address2_country'],
                        ],
                    ],
                    'password' => 'shopify123',
                    'password_confirmation' => 'shopify123',
                    'send_email_welcome' => false,
                ],
            ];
            // Make the API call using your existing function
            $apiResponse = $this->makeAnAPICallToShopify('POST', $endpoint, null, $headers, $payload);
            return $apiResponse;
        }
    }
    public function bringCustomeDetails($data)
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
