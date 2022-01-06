<?php

require_once("./Shipment.php");

class ShipmentFactory {

    public function getInstance($type) {

        if ($type == 'cepatKirim'){
            return new CepatKirim;
        }else if ($type == 'pastiAntar') {
            return new PastiAntar;
        }else if ($type == 'parcelku') {
            return new Parcelku;
        }
    }
    
}