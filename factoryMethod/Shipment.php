<?php

interface ShipmentInterface {
    public function createShipment();
    public function trackItem();
}

class CepatKirim implements ShipmentInterface{
    public function createShipment() 
    {
        echo "create shipment Cepat Kirim\n";
    }

    public function trackItem() 
    {
        echo "Tracking item Cepat Kirim\n";
    }
}

class PastiAntar implements ShipmentInterface{
    public function createShipment() 
    {
        echo "create shipment Pasti Antar\n";
    }

    public function trackItem() 
    {
        echo "Tracking item Pasti Antar\n";
    }
}

class Parcelku implements ShipmentInterface{
    public function createShipment() 
    {
        echo "create shipment Parcelku\n";
    }

    public function trackItem() 
    {
        echo "Tracking item Parcelku\n";
    }
}