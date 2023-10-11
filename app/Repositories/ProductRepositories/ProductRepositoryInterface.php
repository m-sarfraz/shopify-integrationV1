<?php
namespace App\Repositories\ProductRepositories;

interface ProductRepositoryInterface
{
    public function getShopifyProducts($requiredList);
    public function getSingleProductOrOrder($requiredObject,$requiredObjectID);
    public function checkForShopifyDiscount($data);
}
