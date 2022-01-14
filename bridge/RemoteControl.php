<?php

class RemoteControl
{

    protected $device;

    public function __construct($device)
    {
        $this->device = $device;
    }

    public function volumeDown() : void
    {
        $this->device->setVolume($this->device->getVolume() - 1);
    }

    public function volumeUp(): void
    {
        $this->device->setVolume($this->device->getVolume() + 1);
    }

    public function view() : void
    {
        echo "Current Volume is: " . $this->device->getVolume() . "\n\n";
    }

}   