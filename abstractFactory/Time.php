<?php

interface Time {
    public function build();
}

class TimeReguler implements Time {
    public function build()
    {
        echo "build time reguler\n\n";
    }
}

class TimePremium implements Time {
    public function build()
    {
        echo "build time premium\n\n";
    }
}