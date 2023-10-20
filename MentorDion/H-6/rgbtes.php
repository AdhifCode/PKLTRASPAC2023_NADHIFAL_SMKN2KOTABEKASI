<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {

        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        $gambar_info = getimagesize($gambar_tmp);
        // print_r($gambar_info);
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
            }
        }

        $num_clusters = 4;
        $cluster_centers = [];
        for ($i = 0; $i < $num_clusters; $i++) {
            $cluster_centers[] = imagecolorat($gambar_gd, rand(0, $lebar - 1), rand(0, $tinggi - 1));
        }
        $max_iterations = 100;
        for ($iteration = 0; $iteration < $max_iterations; $iteration++) {
            $pixel_clusters = [];
            for ($x = 0; $x < $lebar; $x++) {
                for ($y = 0; $y < $tinggi; $y++) {
                    $rgb = imagecolorat($gambar_gd, $x, $y);

                    $min_distance = PHP_INT_MAX;
                    $closest_cluster = null;

                    foreach ($cluster_centers as $index => $center) {
                        $distance = abs($center - $rgb);
                        if ($distance < $min_distance) {
                            $min_distance = $distance;
                            $closest_cluster = $index;
                        }
                    }
                    $pixel_clusters[$closest_cluster][] = [$x, $y];
                }
            }
            foreach ($pixel_clusters as $cluster_index => $pixels) {
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

                $cluster_centers[$cluster_index] = imagecolorallocate($gambar_baru, $avg_red, $avg_green, $avg_blue);
            }
        }
        for ($x = 0; $x < $lebar; $x++) {
            for ($y = 0; $y < $tinggi; $y++) {
                $rgb = imagecolorat($gambar_gd, $x, $y);

                $min_distance = PHP_INT_MAX;
                $closest_cluster = null;

                foreach ($cluster_centers as $index => $center) {
                    $distance = abs($center - $rgb);
                    if ($distance < $min_distance) {
                        $min_distance = $distance;
                        $closest_cluster = $index;
                    }
                }

                imagesetpixel($gambar_baru, $x, $y, $cluster_centers[$closest_cluster]);
            }
        }
        imagepng($gambar_baru, $output_file . "_segmented.png");
        echo '<h2>Hasil Gambar</h2>';
        echo '<img src="' . $output_file . '_segmented.png' . '" alt="">';

        imagedestroy($gambar_gd);
        imagedestroy($gambar_baru);
    }
}