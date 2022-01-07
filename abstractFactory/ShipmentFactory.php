<?php

require_once("./Time.php");
require_once("./Warranty.php");

interface ShipmentFactory
{
    public function createTime() : Time;
    public function creatWarranty() : Warranty;
}

class ShipmentFactoryReguler implements ShipmentFactory {
    public function createTime(): Time
    {
        return new TimeReguler;
    }

    public function creatWarranty(): Warranty
    {
        return new WarrantyReguler;
    }
}   

class ShipmentFactoryPremium implements ShipmentFactory {
    public function createTime(): Time
    {
        return new TimePremium;
    }

    public function creatWarranty(): Warranty
    {
        return new WarrantyPremium;
    }
} 