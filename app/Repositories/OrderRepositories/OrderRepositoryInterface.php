<?php
namespace App\Repositories\OrderRepositories;

interface OrderRepositoryInterface
{
    public function createOrder($data, $customerData);
    public function checkCustomerDetails($data);
    public function verifyZipCode($data);
}
