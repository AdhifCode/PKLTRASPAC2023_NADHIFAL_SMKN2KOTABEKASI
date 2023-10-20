<?php
interface Vehicle {
    public function start();
    public function stop();
}

class Car implements Vehicle {
    public function start() {
        echo "Mobil telah dinyalakan.";
    }

    public function stop() {
        echo "Mobil telah dimatikan.";
    }
}

$car = new Car();
$car->start();
$car->stop();
