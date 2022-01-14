<?php

class AdvanceRemoteControl extends RemoteControl
{

    public function __construct($device)
    {
        parent::__construct($device);
    }

    public function mute()
    {
        $this->device->setVolume(0);
    }

}