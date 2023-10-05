<?php
use PHPShopify\ShopifySDK;

class ShopifyService
{
    protected $shopify;

    public function __construct()
    {
        $this->shopify = new ShopifySDK();
    }

    public function getShopInfo()
    {
        return $this->shopify->Shop->get();
    }

    // Add more methods as needed to interact with the Shopify API
}
