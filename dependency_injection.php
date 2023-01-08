<?php

class Driver{
    protected $vehicle;
    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function startVehicle(){
        $this->vehicle->start();
    }
}

class Bike implements VehicleInterface{
    public function start(){
        print("Bike started");
    }
}
class Car implements VehicleInterface{
    public function start(){
        print("Car started");
    } 
}

interface VehicleInterface{
  public function start();
}


$bike = new Bike();
$car =  new Car();
$driver = new Driver($car);
$drive ->startVehicle();

?>