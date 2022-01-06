<?php

require_once("./ProductBuilder.php");

$product1 = (new ProductBuilder())
    ->setSkuiID('PGK8R32')
    ->setMerchantID(1)
    ->setProductName("Sneaker Ku")
    ->build();

$product2 = (new ProductBuilder())
    ->setSkuiID('PGK8R31')
    ->setMerchantID(1)
    ->setProductName("Sneaker Ku")
    ->setQuantity(100)
    ->build();
        
print_r($product2);