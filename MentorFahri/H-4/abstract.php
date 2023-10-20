<?php
abstract class Binatang {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    abstract public function bersuara();
}

class Kucing extends Binatang {
    public function bersuara() {
        return $this->nama . " (" . $this->jenis . ") mengeluarkan suara: Meow!";
    }
}

class Anjing extends Binatang {
    public function bersuara() {
        return $this->nama . " (" . $this->jenis . ") mengeluarkan suara: Woof!";
    }
}

$binatang1 = new Kucing("Kitty", "Kucing Persia");
$binatang2 = new Anjing("Buddy", "Golden Retriever");

$daftar_binatang = [$binatang1, $binatang2];
foreach ($daftar_binatang as $binatang) {
    echo $binatang->bersuara() . "<br>";
}
