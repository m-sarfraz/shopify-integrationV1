<?php
namespace App\Traits;

use Exception;
use GuzzleHttp\Client;

trait ShopifyAPITrait
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
    public function makeAPOSTCallToShopify($payload, $endpoint, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers === null ? [] : $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $aHeaderInfo = curl_getinfo($ch);
        $curlHeaderSize = $aHeaderInfo['header_size'];
        $sBody = trim(mb_substr($result, $curlHeaderSize));

        return ['statusCode' => $httpCode, 'body' => $sBody];
    } 
}
