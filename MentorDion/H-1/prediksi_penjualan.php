<?php
function linearRegression($x, $y, $x_prediksi) {
    $mean_x = array_sum($x) / count($x);
    $mean_y = array_sum($y) / count($y);

    $variance_x = 0;
    $covariance_xy = 0;
    for ($i = 0; $i < count($x); $i++) {
        $variance_x += pow($x[$i] - $mean_x, 2);
        $covariance_xy += ($x[$i] - $mean_x) * ($y[$i] - $mean_y);
    }

    $slope = $covariance_xy / $variance_x;
    $intercept = $mean_y - $slope * $mean_x;
    $prediksi = $slope * $x_prediksi + $intercept;

    return $prediksi;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_penjualan = $_POST["penjualan"];
    $prediksi_hari = (int)$_POST["prediksi_hari"];

    if (count($data_penjualan) != 10 || $prediksi_hari < 1) {
        echo "Error: Masukkan 10 angka penjualan dan pilih hari prediksi yang valid.";
    } else {
        $data_hari = range(1, 10);
        $hasil_prediksi = array();
        $hasil_prediksi[] = linearRegression($data_hari, $data_penjualan, $prediksi_hari);

        $jumlah_hari_prediksi = 11;
        for ($i = 1; $i <= $jumlah_hari_prediksi; $i++) {
            $data_hari[] = $prediksi_hari + $i;
            $data_penjualan[] = $hasil_prediksi[$i - 1];
            $hasil_prediksi[] = linearRegression($data_hari, $data_penjualan, $prediksi_hari + $i);
        }

        echo "<h2>Hasil Prediksi Penjualan:</h2>";
        for ($i = 0; $i < count($hasil_prediksi); $i++) {
            $hari_ke = $prediksi_hari + $i;
            echo "Prediksi penjualan di hari ke-$hari_ke adalah: " . number_format($hasil_prediksi[$i], 10, ',', '.') . "<br>";
        }
    }
}
?>