<?php

require_once("./Shipment.php");
require_once("./CepatKirim.php");
require_once("./PastiAntar.php");

$shipment1 = new CepatKirim();
$shipment2 = new PastiAntar();

$shipment1->createShipment();
$shipment2->createShipment();