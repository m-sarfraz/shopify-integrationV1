<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Repositories\CustomerRepositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // dependency injeciton for Respositories Design Pattern
    protected $CustomerRepository;
    private $responseController;

    // constructor and injecting Respositories
    public function __construct(CustomerRepositoryInterface $CustomerRepository, ResponseController $responseController)
    {
        $this->CustomerRepository = $CustomerRepository;
        $this->responseController = $responseController;
    }
    // dummy static IDS: product id = 4772854497463 & order id = 4341443952823
    public function createOrUpdateShopifyCustomer(Request $request)
    {
        $data = $request->all();
        $response = $this->CustomerRepository->checkCustomerDetails($data);
        return $response;
    }
    public function bringShopifyCustomerDetails(Request $request)
    {
        $data = $request->all(); 
        $response = $this->CustomerRepository->bringCustomeDetails($data);
        return $response;
    }
}
