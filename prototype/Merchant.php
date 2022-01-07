<?php

class Merchant {
    
    private $name;
    private $city;
    private $category;

    public function __construct($name, $city, $category)
    {
        $this->name = $name;
        $this->city = $city;
        $this->category = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function clone() : Merchant
    {
        // return new Merchant($this->name, $this->city, $this->category);
        return clone $this;
    }
}