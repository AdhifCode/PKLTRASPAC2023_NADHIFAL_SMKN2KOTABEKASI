<?php
class Binatang {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function bersuara() {
    
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Jenis: {$this->jenis}";
    }
}

class Kucing extends Binatang {
    public function bersuara() {
        return $this->nama . " (" . $this->jenis . ") mengeluarkan suara: Meow!";
    }
}

$kucing = new Kucing("Kitty", "Kucing Persia");

echo $kucing->bersuara() . "<br>";

echo $kucing->getInfo() . "<br>";
