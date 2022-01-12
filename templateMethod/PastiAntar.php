<?php

class PastiAntar extends Shipment 
{

    public function getName(): string
    {
        return "Pasti Antar";
    }

    public function getMinWeight(): float
    {
        return 50.00;
    }

    public function getMaxWeight(): float
    {
        return 2500.00;
    }

}