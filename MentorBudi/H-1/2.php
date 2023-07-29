<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="usia">Usia:</label>
        <input type="number" name="usia" required><br>

        <label for="gender">Kelamin:</label>
        <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
        <input type="radio" name="gender" value="Perempuan" required> Perempuan<br>

        <label for="jam_datang">Jam Datang:</label>
        <input type="time" name="jam_datang" required><br>

        <label for="teman_gender">Bersama Teman:</label>
        <input type="radio" name="teman_gender" value="Laki-laki"> Laki-laki
        <input type="radio" name="teman_gender" value="Perempuan"> Perempuan
        <input type="radio" name="teman_gender" value="sendirian" checked> Sendirian😢<br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $usia = $_POST["usia"];
        $jamDatang = $_POST["jam_datang"];
        $gender = $_POST["gender"];
        $bersamaTeman = $_POST["teman_gender"];

        $bolehMasuk = false;
        $ruangan = "";

        if ($jamDatang < "14:00" && $usia > 20) {
            $bolehMasuk = true;
        } elseif ($jamDatang < "14:00" && $usia < 20) {
            $bolehMasuk = false;
        } elseif ($jamDatang >= "14:00" && $usia < 20) {
            $bolehMasuk = false;
        } else {
            $bolehMasuk = true;
        }
        if ($usia < 20 && $bersamaTeman != "sendirian") {
            $bolehMasuk = false;
        }

        if ($bolehMasuk) {
            if ($bersamaTeman == "sendirian") {
                $ruangan = "Privat";
            } 
            if ($bersamaTeman == "Perempuan" || $gender == "Laki-Laki" && $bersamaTeman == "Laki-Laki" || $gender == "Perempuan") {
                $ruangan = "Publik";
            }
            else {
                $ruangan = "Private & Publik";
            }
        } else {
            $ruangan = "Tidak diizinkan masuk";
        }

        $status = $bolehMasuk ? "Boleh Masuk" : "Tidak Boleh Masuk";

        echo "Nama: $nama<br>";
        echo "Usia: $usia tahun<br>";
        echo "Jam Datang: $jamDatang<br>";
        echo "Status: $status<br>";
        echo "Ruang: $ruangan<br>";
    }
    ?>
</body>
</html>