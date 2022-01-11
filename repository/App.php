<?php

require_once("./Database.php");
require_once("./Product.php");
require_once("./ProductRepository.php");

$product = new Product();
$productRepo = new ProductRepository();

$product->setSkuID('PGK8R34');
$product->setMerchantID(3);
$product->setProductName('Sneaker Modern 14');
$product->setImage( 'localhost:7000/public/uploads/1630123199238701473.png');
$product->setQuantity(100);

$productRepo->insert($product);

$productList = $productRepo->getAll();

print_r($productList);