<?php
class Engine {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }
}

class Car {
    public function getEngineType(Engine $engine) {
        echo "Mobil ini memiliki mesin tipe {$engine->type}.";
    }
}

$engine = new Engine("V12 Coyy 😯");
$car = new Car();
$car->getEngineType($engine);
