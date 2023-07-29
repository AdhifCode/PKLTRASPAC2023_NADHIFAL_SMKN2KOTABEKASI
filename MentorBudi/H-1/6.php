<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" required>
        <select name="operator" required>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <option value="modulo">%</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $num1 + $num2;
                break;
            case 'kurang':
                $hasil = $num1 - $num2;
                break;
            case 'kali':
                $hasil = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $hasil = $num1 / $num2;
                } else {
                    echo "Tidak Bisa Di Bagi Dengan 0, Ganti Angkanya Coy";
                }
                break;
            case 'modulo':
                if ($num2 != 0) {
                    $hasil = $num1 % $num2;
                } else {
                    echo "Tidak Bisa Di Modulo Dengan 0, Ganti Angkanya Coy";
                }
                break;
            default:
                echo "Minimal Kasih Angka Yang Bener dlu lh 💀";
                break;
        }

        echo "<h3>Hasil: $hasil Tempe Goreng☠️</h3>";
    }
    ?>
</body>
</html>
