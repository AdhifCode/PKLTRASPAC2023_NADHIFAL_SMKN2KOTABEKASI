<?php
// $berat_pred = $_POST['berat_pred'];
// $tinggi_pred = $_POST['tinggi_pred'];
class Regresi {
    public $x = [
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2],
        [1, 2]
    ],
     $w = [0, 0],
     $y = [0, 1, 1, 1, 0, 0, 0, 1, 0, 1],
     $fitur = 2,
     $arrayPrediksi = [],
     $arraySigmoid = [],
     $arraySelisihPrediksi = [],
     $transpose = [],
     $koefisienWeight = [],
     $lr = 0.01,
     $b = 0;

    public function arrayPrediksi() {
        for ($i = 0; $i < count($this->x); $i++) {
            $this->arrayPrediksi[$i] = 0;

            for ($j = 0; $j < count($this->x[$i]); $j++) {
                $this->arrayPrediksi[$i] += ($this->x[$i][$j] * $this->w[$j]);
            }

            $this->arrayPrediksi[$i] += $this->b;
        }
    }

    public function arraySigmoid() {
        for ($i = 0; $i < count($this->arrayPrediksi); $i++) {
            $this->arraySigmoid[$i] = 1 / (1 + exp(-$this->arrayPrediksi[$i]));
        }
    }

    public function arraySelisihPrediksi() {
        for ($i = 0; $i < count($this->arraySigmoid); $i++) {
            $this->arraySelisihPrediksi[$i] = $this->arraySigmoid[$i] - $this->y[$i];
        }
    }

    public function Transpose() {
        $baris = count($this->x);
        $kolom = count($this->x[0]);

        for ($i = 0; $i < $kolom; $i++) {
            $this->transpose[$i] = [];
            for ($j = 0; $j < $baris; $j++) {
                $this->transpose[$i][$j] = $this->x[$j][$i];
            }
        }
    }

    public function koefisienWeight() {
        $n = count($this->x);
        $kolom = count($this->transpose);

        for ($j = 0; $j < $kolom; $j++) {
            $sum = 0;

            for ($i = 0; $i < $n; $i++) {
                $sum += $this->transpose[$j][$i] * $this->arraySelisihPrediksi[$i];
            }

            $this->koefisienWeight[$j] = (1 / $n) * $sum;
        }
    }

    
    
}

$regresi = new Regresi();
$regresi->arrayPrediksi();
$regresi->arraySigmoid();
$regresi->arraySelisihPrediksi();
$regresi->Transpose();
$regresi->koefisienWeight();

echo "Array Prediksi: <pre>";
print_r($regresi->arrayPrediksi);
echo "Array Sigmoid: <pre>";
print_r($regresi->arraySigmoid);
echo "Array Selisih Prediksi: <pre>";
print_r($regresi->arraySelisihPrediksi);
echo "Transpose X: <pre>";
print_r($regresi->transpose);
echo "Koefisien Weight: <pre>";
print_r($regresi->koefisienWeight);

