<!DOCTYPE html>
<html>
<head>
    <title>Prediksi Penjualan</title>
</head>
<body>
    <h1>Prediksi Penjualan</h1>
    <form action="prediksi_penjualan.php" method="post">
        <h2>Input Data Penjualan</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Hari ke-$i: <input type='number' name='penjualan[]' required><br>";
        }
        ?>
        <h2>Prediksi Penjualan</h2>
        Hari ke berapa: <input type="number" name="prediksi_hari" required><br>
        <input type="submit" value="Prediksi">
    </form>
</body>
</html>
