<?php

abstract class Shipment 
{

    public function createShipment()
    {
        echo "Start create shipment via: ". $this->getName() . ".\n\n";
        echo "Validating item ...........\n\n";
        echo "Min weight is: ". $this->getMinWeight() . " gram and max weigt is: " . $this->getMaxWeight() ." gram.\n\n";
        echo "Creating shipment...........\n\n";
        echo "Successfully create shipment via: ". $this->getName() . ".\n\n";

    }

    abstract public function getName(): string;

    abstract public function getMinWeight(): float;

    abstract public function getMaxWeight(): float;

}