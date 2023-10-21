<?php
namespace App\Repositories\OrderRepositories;

interface OrderRepositoryInterface
{
    public function createOrder($data); 
    public function verifyZipCode($data);
}
