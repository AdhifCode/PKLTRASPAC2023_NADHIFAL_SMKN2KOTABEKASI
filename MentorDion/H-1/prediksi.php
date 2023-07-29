<?php
function linearRegression($x, $y, $prediction_day) {
    $n = count($x);
    $x_sum = array_sum($x);
    $y_sum = array_sum($y);
    $xy_sum = 0;
    $x_square_sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $xy_sum += ($x[$i] * $y[$i]);
        $x_square_sum += ($x[$i] * $x[$i]);
    }
    $m = ($n * $xy_sum - $x_sum * $y_sum) / ($n * $x_square_sum - $x_sum * $x_sum);
    $b = ($y_sum - $m * $x_sum) / $n;
    $prediction = $m * $prediction_day + $b;
    return $prediction;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["income"]) && isset($_POST["prediction_day"])) {
    $income = $_POST["income"];
    $prediction_day = $_POST["prediction_day"];
    if (count($income) == 10) {
        $penghasilan = $income;
        $prediksi_penjualan = linearRegression($penghasilan, $prediction_day);

        echo "Prediksi penjualan di hari ke-$prediction_day adalah: " . round($prediksi_penjualan, 2);
    } else {
        echo "Mohon isi data penghasilan untuk 10 hari.";
    }
} else {
    echo "Mohon isi data penghasilan dan hari prediksi.";
}
?>
