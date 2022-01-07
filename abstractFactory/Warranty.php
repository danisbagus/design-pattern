<?php

interface Warranty {
    public function build();
}

class WarrantyReguler implements Warranty {
    public function build()
    {
        echo "build warranty reguler\n\n";
    }
}

class WarrantyPremium implements Warranty {
    public function build()
    {
        echo "build warranty premium\n\n";
    }
}