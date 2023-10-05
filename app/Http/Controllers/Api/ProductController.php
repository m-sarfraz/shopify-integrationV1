<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Repositories\ProductRepositories\ProductRepositoryInterface;

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

    // get shop products list
    public function getShopifyProductsList()
    {
        // call API to get Products
        $apiResponse = $this->productRepository->getShopifyProducts();

        // handle API responses and Return Results accordingly
        if ($apiResponse['statusCode'] == 200) {
            $products = $apiResponse['body']['products'];
            return $this->responseController->successResponse($products);
        } else {
            return $this->responseController->errorResponse('Failed to retrieve products');
        }
    }

    // test API if backend is working
    public function test()
    {
        return 'Backend is Working Fine';
    }

}
