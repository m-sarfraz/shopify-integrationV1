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
    public function createShopifyOrder(Request $request)
    {
        $data = $request->all();
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
