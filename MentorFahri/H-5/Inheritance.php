<?php
class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getDetails() {
        echo "Ini adalah {$this->make} {$this->model}.";
    }
}

class Car extends Vehicle {
    private $color;

    public function __construct($make, $model, $color) {
        parent::__construct($make, $model);
        $this->color = $color;
    }

    public function getColor() {
        echo "Warna mobil ini adalah {$this->color}.";
    }
}

$car = new Car("Toyota", "Camry", "Merah");
$car->getDetails();
$car->getColor();
