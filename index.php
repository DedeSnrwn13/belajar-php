<?php
    $nama = "dede";
    $nilai = 45;

    if ($nama == 'dede') {
        echo "Selamat Datang Dede Sunarwan";
    } else {
        echo "Kamu bukan Dede";
    }

    if ($nilai >= 50) {
        echo "Anda lulus. Nilai Anda " . $nilai;
    } else {
        echo "Maaf Anda belum lulus. Nilai anda " . $nilai;
    }
?>
