<?php
class Car {
    public function startEngine() {
        echo "Mobil";
    }
}

class Driver {
    public function drive(Car $car) {
        echo "Driver sedang mengemudikan kendaraan";
        $car->startEngine();
    }
}

$car = new Car();
$driver = new Driver();
$driver->drive($car);
