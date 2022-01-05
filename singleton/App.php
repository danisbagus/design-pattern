<?php

require_once("./Database.php");
require_once("./Product.php");
require_once("./ProductDetail.php");

$Product = new Product();
$ProductDetail = new ProductDetail();

$Product->save('PGK8R32', 1, 'Sneaker Modern 12', 'localhost:7000/public/uploads/1630123199238701473.png', 30);

$products = $Product->getAll();
$productDetails = $ProductDetail->getAll();

print_r($productDetails);