<?php

require_once("./Product.php");

class ProductBuilder {

    private $sku_id;
    private $product_name;
    private $merchant_id;
    private $image;
    private $quantity = 0;

    public function setSkuiID($sku_id) 
    {
        $this->sku_id = $sku_id;
        return $this;
    }

    public function setProductName($product_name) 
    {
        $this->product_name = $product_name;
        return $this;
    }

    public function setMerchantID($merchant_id) 
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }

    public function setImage($image) 
    {
        $this->image = $image;
        return $this;
    }

    public function setQuantity($quantity) 
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function build(): Product
    {
        return new Product(
            $this->sku_id,
            $this->product_name,
            $this->merchant_id,
            $this->image,
            $this->quantity,
        );
    }
    
}