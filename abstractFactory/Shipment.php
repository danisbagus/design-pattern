<?php

require_once("./ShipmentFactory.php");

class Shipment {

    private $time;
    private $warranty;

    public function __construct(ShipmentFactory $shipmentFactory)
    {
        $this->time = $shipmentFactory->createTime();
        $this->warranty= $shipmentFactory->creatWarranty();
    }

    function start()
    {
        $this->time->build();
        $this->warranty->build();
    }
}