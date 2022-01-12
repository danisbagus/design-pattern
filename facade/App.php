<?php

define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__.'/facade/Database.php');
require_once(__ROOT__.'/facade/model/Product.php');
require_once(__ROOT__.'/facade/repo/Product.php');
require_once(__ROOT__.'/facade/facade/Product.php');

$product = new Product();
$productFacade = new ProductFacade();

$product->setSkuID('PGK8R30');
$product->setMerchantID(3);
$product->setProductName('Sneaker Modern 17');
$product->setImage( 'localhost:7000/public/uploads/1630123199238701473.png');
$product->setQuantity(100);

$productFacade->insert($product);

$productList = $productFacade->getAll();

print_r($productList);