<?php
class Engine {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }
}

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine("V12 💀");
    }

    public function getEngineType() {
        echo "Mobil ini Jalan menggunakan mesin tipe {$this->engine->type}.";
    }
}

$car = new Car();
$car->getEngineType();
