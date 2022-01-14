<?php

class TV implements Device
{
    
    protected $volume = 10;
    

    /**
     * Get the value of volume
     */ 
    public function getVolume() : int
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {

        echo "set TV volume to: " . $volume ."\n\n";

        $this->volume = $volume;

        return $this;
    }
}