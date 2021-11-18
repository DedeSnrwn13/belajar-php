<?php
    $nilai_tes = 70;
    $wawanacara = "A";

    // Nilai test lebih dari 70
    if ($nilai_tes >= 70) {
        echo "Anda lulus";

        if ($wawancara = 'A') {
            echo "Predikat Anda sangat memuaskan";
        } else if ($wawancara = 'B') {
            echo "Predikat Anda memuaskan";
        } else {
            echo "Predikat anda cukup";
        }
    } else {
        echo "Anda belum lulus";
    }
?>
