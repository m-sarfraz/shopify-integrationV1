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

    public function createOrder($data, $customerData)
    {
        // append header array for Shopify API Call
        $headers = [
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => $this->accessToken,
        ];
        // Define the API endpoint for creating customer with post request
        $endpoint = "https://$this->storeUrl/admin/api/2021-10/orders.json";
        // Email does not exist in the response create a new customer
        // return $data;
        $payload = ["order" => [
            "email" => $data['email'],
            "line_items" => [
                [
                    "variant_id" => $data['variant_id'],
                    "title" => $data['title'],
                    "price" => $data['priceHidden'],
                    'grams' => $data['grams'],
                    "quantity" => "2",
                ],
            ],
            "tax_lines" => [
                [
                    "price" => $data['tax_price'],
                    "rate" => $data['tax_rate'],
                    "title" => $data['tax_title'],
                ],
            ],

            "requires_shipping" => true,
            "shipping_lines" => [
                [
                    "title" => $data['shipping_name'], // Replace with your shipping method
                    "price" => $data['shipping_price'], // Replace with the shipping cost
                    "code" => "Standard", // Replace with shipping code if applicable
                    "source" => "shopify",
                    // Add other relevant shipping details as needed
                ],
            ],
            "shipping_address" =>
            [
                "customer_id" => $customerData['body']['customer']['email'],
                "first_name" => $customerData['body']['customer']['first_name'],
                "last_name" => $customerData['body']['customer']['last_name'],
                "address1" => $customerData['body']['customer']['addresses'][0]['address1'],
                "address2" => $customerData['body']['customer']['addresses'][0]['address2'],
                "city" => $customerData['body']['customer']['addresses'][0]['city'],
                "province" => $customerData['body']['customer']['addresses'][0]['province'],
                "country" => $customerData['body']['customer']['addresses'][0]['country'],
                "zip" => $customerData['body']['customer']['addresses'][0]['zip'],
                "phone" => $customerData['body']['customer']['addresses'][0]['phone'],
                "name" => $customerData['body']['customer']['addresses'][0]['name'],
                "province_code" => $customerData['body']['customer']['addresses'][0]['province_code'],
                "country_code" => $customerData['body']['customer']['addresses'][0]['country_code'],
                "country_name" => $customerData['body']['customer']['addresses'][0]['country_name'],
            ],
            "discount_codes" => [
                [
                    "code" => $data['discount_code'],
                    "amount" => $data['discount_amount'],
                    "type" => $data['discount_code'],
                ],
            ],

            "total_tax" => $data['tax_price'],
            "currency" => "EUR",
            //   [
            //      "product_id" => 4772854497463,
            //      "title"=>'Front Rear Ceramic Brake  SRT-4',
            //      "price"=>10.00,
            //      'grams'=> 1200,
            //      "quantity"   => 2,
            //   ],

        ]];
        // handle billing according to customer selected option for same as shipping or diff billing
        if ($data['addressOption'] == 'sameShipping') {
            $payload['order']['billing_address'] = $payload['order']['shipping_address'];
        } else if ($data['addressOption'] == 'diffShipping') {
            $payload['order']['billing_address'] = [
                "customer_id" => $customerData['body']['customer']['email'],
                'first_name' => $data['address2_firstName'],
                'last_name' => $data['address2_lastName'],
                'address1' => $data['address2'],
                'city' => $data['address2_city'],
                'province' => $data['zone'],
                'country' => $data['address2_country'],
                'zip' => $data['address2_zip_code'],
                'appartment' => $data['address2_appartment'],
                "phone" => $customerData['body']['customer']['addresses'][0]['phone'],
                "name" => $customerData['body']['customer']['addresses'][0]['name'],
                "province_code" => $customerData['body']['customer']['addresses'][0]['province_code'],
                "country_code" => $customerData['body']['customer']['addresses'][0]['country_code'],
                "country_name" => $customerData['body']['customer']['addresses'][0]['country_name'],
            ];
        }
        // handle payment ways to append order payload either successfull paypal or COD
        if ($data['paymentOption'] == 'COD') {
            $payload['order']['gateway'] = 'cash_on_delivery';
            $payload['order']['financial_status'] = "pending";
        } else if ($data['paymentOption'] == 'paypal') {
            $payload['order']['transactions'] = [
                ["kind" => "sale",
                    "status" => "success",
                    "amount" => $data['totalAmountHidden']],
            ];
            $payload['order']['gateway'] = 'paypal';
            $payload['order']['financial_status'] = 'paid';

        }
        // return $payload;
        // Optionally, you can convert the array to JSON if needed
        // $payload = json_encode($payload);

        // Now $payload contains the array of parameters equivalent to the cURL command.

        // Make the API call using your existing function or making Shopify API Call
        $apiResponse = $this->makeAnAPICallToShopify('POST', $endpoint, null, $headers, $payload);
        return $apiResponse;
    }
    // verify zip code from database
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
                            // [
                            //     'address2' => $data['address2'],
                            //     'city' => $data['address2_city'],
                            //     'province' => 'ON',
                            //     'phone' => '555-1212',
                            //     'zip' => $data['address2_zip_code'],
                            //     'last_name' => $data['address2_lastName'],
                            //     'first_name' => $data['address2_firstName'],
                            //     'country' => $data['address2_country'],
                            // ],
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
}
