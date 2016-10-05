<?php
include_once 'Vehicle.php';

class Motorcycle extends Vehicle
{
    public $type;



    public function drive()
    {
        echo 'i can drive';
    }

}