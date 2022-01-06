<?php

require_once("./ShipmentFactory.php");

$ShipmentFactory = new ShipmentFactory;

$cepatKirim = $ShipmentFactory->getInstance('cepatKirim');

$parcelku = $ShipmentFactory->getInstance('parcelku');

$cepatKirim->trackItem();

$parcelku->trackItem();