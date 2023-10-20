<?php
class Hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bersuara() {
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        return $this->nama . " mengeluarkan suara: Meow!";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return $this->nama . " mengeluarkan suara: Woof!";
    }
}

$hewan1 = new Kucing("Kitty");
$hewan2 = new Anjing("Buddy");

$daftar_hewan = [$hewan1, $hewan2];
foreach ($daftar_hewan as $hewan) {
    echo $hewan->bersuara() . "<br>";
}
?>