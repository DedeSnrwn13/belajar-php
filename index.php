<?php
   $warna  = ['merah','biru','kuning','merah','hijau','orange','ungu',
            'biru','kuning','merah','hijau','orange', 'ungu', 'merah'];
    
    $jumlah_merah = 0;

    foreach ($warna as $key => $value) {
        echo "Index ke-$key berisi nilai $value <br>";

        if ($value == 'merah') {
            $jumlah_merah++;
        }
    } 

    echo "Jumlah warna merah pada array sebanyak $jumlah_merah";
?>
