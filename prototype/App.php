<?php

require_once("./Merchant.php");

$merchant1 = new Merchant("Pecel Lele Cak Kumis", "Malang", "F&B");
$merchant2 = $merchant1->clone();
$merchant2->setName("Soto Bu Midi");

// print_r($merchant1);
// print_r($merchant2);