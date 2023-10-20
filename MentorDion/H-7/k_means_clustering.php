<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["do_proses"])) {

        $k_value = isset($_POST["k_value"]) ? (int)$_POST["k_value"] : null;
        $gambar_tmp = $_FILES["file_image"]["tmp_name"];
        $gambar_info = getimagesize($gambar_tmp);
        // print_r($gambar_info);
        $jenis_gambar = $gambar_info[2];
        // print_r($jenis_gambar);
        $output_file = pathinfo($_FILES["file_image"]["name"], PATHINFO_FILENAME);

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
            }
        }

        $centroid = [];
        for ($i = 0; $i < $k_value; $i++) {
            $centroid[] = imagecolorat($gambar_gd, rand(0, $lebar - 1), rand(0, $tinggi - 1));
        }
        print_r($centroid);
        $max_iterasi = 100;
        for ($iterasi = 0; $iterasi < $max_iterasi; $iterasi++) {
            $pixel_clusters = [];
            for ($x = 0; $x < $lebar; $x++) {
                for ($y = 0; $y < $tinggi; $y++) {
                    $rgb = imagecolorat($gambar_gd, $x, $y);

                    $min_jarak = PHP_INT_MAX;
                    $cluster_terdekat = null;

                    foreach ($centroid as $index => $center) {
                        $jarak = abs($center - $rgb);
                        if ($jarak < $min_jarak) {
                            $min_jarak = $jarak;
                            $cluster_terdekat = $index;
                        }
                    }
                    $pixel_clusters[$cluster_terdekat][] = [$x, $y];
                }
            }
            print_r($pixel_clusters);

            foreach ($pixel_clusters as $clusters => $pixels) {
                $total_red = 0;
                $total_green = 0;
                $total_blue = 0;
                $total_pixels = count($pixels);

                foreach ($pixels as $pixel) {
                    $rgb = imagecolorat($gambar_gd, $pixel[0], $pixel[1]);
                    $total_red += ($rgb >> 16) & 0xFF;
                    $total_green += ($rgb >> 8) & 0xFF;
                    $total_blue += $rgb & 0xFF;
                }

                $avg_red = $total_red / $total_pixels;
                $avg_green = $total_green / $total_pixels;
                $avg_blue = $total_blue / $total_pixels;

                $centroid[$clusters] = imagecolorallocate($gambar_baru, $avg_red, $avg_green, $avg_blue);
            }
        }

        for ($x = 0; $x < $lebar; $x++) {
            for ($y = 0; $y < $tinggi; $y++) {
                $rgb = imagecolorat($gambar_gd, $x, $y);

                $min_jarak = PHP_INT_MAX;
                $cluster_terdekat = null;

                foreach ($centroid as $index => $center) {
                    $jarak = abs($center - $rgb);
                    if ($jarak < $min_jarak) {
                        $min_jarak = $jarak;
                        $cluster_terdekat = $index;
                    }
                }

                imagesetpixel($gambar_baru, $x, $y, $centroid[$cluster_terdekat]);
            }
        }
        imagepng($gambar_baru, $output_file . "_segmented.png");
        echo '<h2>Hasil Gambar</h2>';
        echo '<img src="' . $output_file . '_segmented.png' . '" alt="">';

        imagedestroy($gambar_gd);
        imagedestroy($gambar_baru);
    }
}