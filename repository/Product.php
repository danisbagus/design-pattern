<?php

class Product extends Database {

    private $skuID;
    private $merchantID;
    private $productName;
    private $image;
    private $quantity;

    public function __construct(){
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    /**
     * Get the value of skuID
     */ 
    public function getSkuID()
    {
        return $this->skuID;
    }

    /**
     * Set the value of skuID
     *
     * @return  self
     */ 
    public function setSkuID($skuID)
    {
        $this->skuID = $skuID;

        return $this;
    }

    /**
     * Get the value of merchantID
     */ 
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Set the value of merchantID
     *
     * @return  self
     */ 
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;

        return $this;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}