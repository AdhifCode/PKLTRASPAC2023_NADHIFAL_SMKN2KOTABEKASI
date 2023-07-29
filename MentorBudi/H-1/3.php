<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nama">Nama Siswa:</label>
        <select id="nama" name="nama" required>
            <option value="Celia">Celia</option>
            <option value="Flora">Flora</option>
            <option value="Haruto">Haruto</option>
            <option value="Kaori">Kaori</option>
            <option value="Hajime">Hajime</option>
            <option value="Yue">Yue</option>
            <option value="Wein">Wein</option>
            <option value="Ninym">Ninym</option>
            <option value="semuaSiswa">Semua Siswa</option>
        </select>
        <input type="submit" value="Tampilkan Predikat">
    </form>

    <?php
    $nilaiSiswa = [
        'Celia' => 'S',
        'Flora' => 'A',
        'Haruto' => 'A',
        'Kaori' => 'B',
        'Hajime' => 'C',
        'Yue' => 'S',
        'Wein' => 'S',
        'Ninym' => 'B'
    ];

    function getPredikat($nilai)
    {
        switch ($nilai) {
            case 'S':
                return "Istimewa";
            case 'A':
                return "Dengan pujian";
            case 'B':
                return "Baik";
            case 'C':
                return "Cukup";
            case 'D':
                return "Dimaklumi";
            default:
                return "Tidak valid";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];

        if ($nama === 'semuaSiswa') {
            echo "<h3>Data Predikat Semua Siswa:</h3>";

            foreach ($nilaiSiswa as $namaSiswa => $nilaiSiswa) {
                $predikatSiswa = getPredikat($nilaiSiswa);
                echo "<strong>Nama:</strong> $namaSiswa<br>";
                echo "<strong>Nilai:</strong> $nilaiSiswa<br>";
                echo "<strong>Predikat:</strong> $predikatSiswa<br><br>";
            }
        } else {
            $nilai = $nilaiSiswa[$nama];
            $predikat = getPredikat($nilai);

            echo "<h3>Hasil:</h3>";
            echo "Nama Siswa: $nama<br>";
            echo "Nilai: $nilai<br>";
            echo "Predikat: $predikat<br>";
        }
    }
    ?>
</body>
</html>
