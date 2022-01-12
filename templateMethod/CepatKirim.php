<?php

class CepatKirim extends Shipment 
{

    public function getName(): string
    {
        return "Cepat Kirim";
    }

    public function getMinWeight(): float
    {
        return 100.00;
    }

    public function getMaxWeight(): float
    {
        return 2000.00;
    }

}