<?php

class Product {
    
    private $sku_id;
    private $product_name;
    private $merchant_id;
    private $image;
    private $quantity;

    public function __construct($sku_id, $merchant_id, $product_name, $image, $quantity)
    {
        $this->sku_id = $sku_id;
        $this->merchant_id = $merchant_id;
        $this->product_name = $product_name;
        $this->image = $image;
        $this->quantity = $quantity;
    }
}