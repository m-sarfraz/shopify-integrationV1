<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Repositories\OrderRepositories\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // dependency injeciton for Respositories Design Pattern
    protected $orderRepository;
    private $responseController;

    // constructor and injecting Respositories
    public function __construct(OrderRepositoryInterface $orderRepository, ResponseController $responseController)
    {
        $this->orderRepository = $orderRepository;
        $this->responseController = $responseController;
    }
    // dummy static IDS: product id = 4772854497463 & order id = 4341443952823
    // before saving data of order save customer details which will create/update against email
    public function createOrUpdateShopifyCustomer(Request $request)
    {
        $data = $request->all();
        $response = $this->orderRepository->checkCustomerDetails($data);
        return $response;
    }

    // create shopify order
    public function createShopifyOrder(Request $request)
    {
        $data = $request->all();
        $response = $this->orderRepository->checkCustomerDetails($data);
        if ($response['statusCode'] != 200) {
            return $this->responseController->errorResponse('Failed to Create Cusomter and Order is not Created, Please verify Billing/Shipping Details are corerct!');
        }
        $apiResponse = $this->orderRepository->createOrder($data);
        return $apiResponse;
        // if it is list of orders request
        if ($apiResponse['statusCode'] == 200) { 
            $products = $apiResponse['body']['order'];
            return $this->responseController->successResponse($products);
        } else {
            return $this->responseController->errorResponse('Failed to retrieve orders');
        }
        return $this->responseController->errorResponse('Failed to retrieve orders');

    }

}
