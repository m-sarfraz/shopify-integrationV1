<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Repositories\ProductRepositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // dependency injeciton for Respositories Design Pattern
    protected $productRepository;
    private $responseController;

    // constructor and injecting Respositories
    public function __construct(ProductRepositoryInterface $productRepository, ResponseController $responseController)
    {
        $this->productRepository = $productRepository;
        $this->responseController = $responseController;
    }
    // dummy static IDS: product id = 4772854497463 & order id = 4341443952823
    // get shop products list
    public function getOrdersOrProductsListFromShopify(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $requiredList = $request->query('param');
        // call API to get Products
        $apiResponse = $this->productRepository->getShopifyProducts($requiredList);

        // handle API responses and Return Results accordingly
        if ($apiResponse['statusCode'] == 200 && $requiredList == 'products') {
            $products = $apiResponse['body']['products'];
            return $this->responseController->successResponse($products);
        } else {
            // if it is list of orders request
            if ($apiResponse['statusCode'] == 200 && $requiredList == 'orders') {
                $products = $apiResponse['body']['orders'];
                return $this->responseController->successResponse($products);
            } else {
                return $this->responseController->errorResponse('Failed to retrieve orders');
            }
            return $this->responseController->errorResponse('Failed to retrieve products');
        }
    }
    // get Single Order or Product from shopify
    public function getSingleOrderOrProductFromShopify(Request $request)
    {

        $requiredObject = $request->query('param');
        $requiredObjectID = $request->query('id');
        // call API to get Products
        $apiResponse = $this->productRepository->getSingleProductOrOrder($requiredObject, $requiredObjectID);
        // return $apiResponse;
        // handle API responses and Return Results accordingly
        if ($apiResponse['statusCode'] == 200 && $requiredObject == 'products') {
            $products = $apiResponse['body']['product'];
            return $this->responseController->successResponse($products);
        } else {
            // if it is list of orders request
            if ($apiResponse['statusCode'] == 200 && $requiredObject == 'orders') {
                $products = $apiResponse['body']['order'];
                return $this->responseController->successResponse($products);
            } else {
                return $this->responseController->errorResponse('Failed to retrieve orders');
            }
            return $this->responseController->errorResponse('Failed to retrieve products');
        }
    }
    // funciton for checking product discount
    public function checkProductDiscount(Request $request)
    {
        $data = $request->all();
        $response = $this->productRepository->checkForShopifyDiscount($data);
        return response()->json($response);
    }

    // function for bringing shipping details
    public function bringShippingDetails(Request $request)
    {
        $country = $request->country;
        // call API to get Products
        $apiResponse = $this->productRepository->getShippingDetailsAndRules($country);
        return $apiResponse;
    }
    // test API if backend is working
    public function test()
    {
        return 'Backend is Working Fine';
    }

}
