<?php
namespace App\Traits;

use Exception;
use GuzzleHttp\Client;

trait ShopifyAPICall
{

    // function for calling Shopify API for get Method with Guzzle Client
    public function makeAnAPICallToShopify($method, $endpoint, $url_params = null, $headers, $requestBody = null)
    {
        try {
            $client = new Client();
            $response = null;
            if ($method == 'GET' || $method == 'DELETE') {
                $response = $client->request($method, $endpoint, ['headers' => $headers]);
            } else {
                $response = $client->request($method, $endpoint, ['headers' => $headers, 'json' => $requestBody]);
            }
            return [
                'statusCode' => $response->getStatusCode(),
                'body' => json_decode($response->getBody(), true),
            ];
        } catch (Exception $e) {
            return [
                'statusCode' => $e->getCode(),
                'message' => $e->getMessage(),
                'body' => null,
            ];
        }
    }

    // function for calling Shopify API with Post method & CURL
    public function makeAPOSTCallToShopify($payload, $endpoint, $headers)
    {
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $endpoint);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers === null ? [] : $headers);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_VERBOSE, 0);
        // curl_setopt($ch, CURLOPT_HEADER, true);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // $result = curl_exec($ch);
        // $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $aHeaderInfo = curl_getinfo($ch);
        // $curlHeaderSize = $aHeaderInfo['header_size'];
        // $sBody = trim(mb_substr($result, $curlHeaderSize));

        // return ['statusCode' => $httpCode, 'body' => $sBody];
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL session and get the response
        $response = curl_exec($ch);

        // Close the cURL session
        curl_close($ch);

        return $response;
    }
}
        if (!empty($apiResponse['body']['customers'])) {
            $customer = $apiResponse['body']['customers'][0]; // Assuming there is only one customer
            if ($customer['email'] === $email) {
                return $customer['id'];
                // Email exists in the response, and $customer contains the customer's data
                return "Email exists in the response.";

                // Define the API endpoint for creating customer with post request
                $endpoint = "https://$storeUrl/admin/api/2021-10/customers/{$customer['id']}.json";

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
                                'phone' => '555-1212',
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

            } else {
                // No customers in the response
                return "Customer Exists! BUT There is an Issue with API";
            }
        }
        