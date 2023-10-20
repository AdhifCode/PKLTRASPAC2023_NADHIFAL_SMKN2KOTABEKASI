<html>
<form action="prediksi.php" method="post">
        <h2>Input Data Penjualan</h2>
        <?php
        for ($x = 1; $x <= 10; $x++) {
            echo "Hari ke-$x: <input type='number' name='inputan[]' required><br>";
        }
        ?>
        <h2>Prediksi Penjualan</h2>
        Hari ke berapa: <input type="number" name="prediksi_hari" required><br>
        <input type="submit" name="submit" value="Prediksi"> 
    </form>
</html>

