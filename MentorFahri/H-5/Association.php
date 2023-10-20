<?php
class Car {
    public function getCarInfo() {
        return "Ini adalah mobil Bogatata.";
    }
}

class Driver {
    public function drive(Car $car) {
        echo "Saya adalah pengemudi dari mobil ini. " . $car->getCarInfo();
    }
}

$car = new Car();
$driver = new Driver();
$driver->drive($car);

