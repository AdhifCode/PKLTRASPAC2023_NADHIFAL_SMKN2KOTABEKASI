<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {

        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        $gambar_info = getimagesize($gambar_tmp);
        print_r($gambar_info);
        $jenis_gambar = $gambar_info[2];
        // print_r($jenis_gambar);
        $output_file = pathinfo($_FILES["gambar"]["name"], PATHINFO_FILENAME);

        if ($jenis_gambar == 2) { //bisa menggunakan IMAGETYPE_JPEG/PNG tapi tetep 2 dan 3 calon presiden
            $gambar_gd = imagecreatefromjpeg($gambar_tmp);
        } elseif ($jenis_gambar == 3) {
            $gambar_gd = imagecreatefrompng($gambar_tmp);
        } else {
            echo "Format gambar tidak didukung.";
            exit;
        }

        // print_r($gambar_gd);
        $lebar = imagesx($gambar_gd);
        // print_r($lebar);
        $tinggi = imagesy($gambar_gd);
        $gambar_baru = imagecreatetruecolor($lebar, $tinggi);

        for ($x = 0; $x < $lebar; $x++) {
            for ($y = 0; $y < $tinggi; $y++) {
                $rgb = imagecolorat($gambar_gd, $x, $y);
                // print_r($rgb);
                $red = ($rgb >> 16) & 0xFF;
                $green = ($rgb >> 8) & 0xFF;
                $blue = $rgb & 0xFF;

                $color = imagecolorallocate($gambar_baru, $red, $green, $blue);
                // var_dump($color);
                imagesetpixel($gambar_baru, $x, $y, $color);
            }
        }

        
        if ($jenis_gambar == 2) {
            $output_file .= "_output.jpeg";
            imagejpeg($gambar_baru, $output_file);
        } elseif ($jenis_gambar == 3) {
            $output_file .= "_output.png";
            imagepng($gambar_baru, $output_file);
        }

        echo '<h2>Hasil Gambar</h2>';
        echo '<img src="' . $output_file . '" alt="">';
    } else {
        echo 'Upload gambar gagal.';
    }
}
?>
