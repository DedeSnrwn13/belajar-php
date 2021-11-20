<?php
   $warna  = ['merah','biru','kuning','merah','hijau','orange','ungu',
            'biru','kuning','merah','hijau','orange', 'ungu', 'merah'];
    
    $jumlah_merah = 0;

    $i = 0;
    while ($i < 15) {
        if ($warna[$i] == 'merah') {
            $jumlah_merah++;
        }
        $i++;
    }   

    echo "Jumlah warna merah pada array sebanyak $jumlah_merah";
?>
