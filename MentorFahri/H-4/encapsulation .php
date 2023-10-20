<?php
class Binatang {
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function bersuara() {
    
    }
}

class Kucing extends Binatang {
    public function bersuara() {
        return $this->getNama() . " (" . $this->getJenis() . ") mengeluarkan suara: Wilip Wilop Woilah😅";
    }
}

class Anjing extends Binatang {
    public function bersuara() {
        return $this->getNama() . " (" . $this->getJenis() . ") mengeluarkan suara: Woof!";
    }
}

$binatang1 = new Kucing("Ujang", "Smurf Cat");
$binatang2 = new Anjing("Buddy", "Golden Retriever");

$daftar_binatang = [$binatang1, $binatang2];
foreach ($daftar_binatang as $binatang) {
    echo $binatang->bersuara() . "<br>";
}
