<?php

require_once("./Shipment.php");
require_once("./ShipmentFactory.php");

$shipmentReguler = new Shipment(new ShipmentFactoryReguler);
$shipmentPremium = new Shipment(new ShipmentFactoryPremium);

$shipmentReguler->start();
$shipmentPremium->start();