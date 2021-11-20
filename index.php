<?php
   $komunitas  = ['haji','gugun','parah','sih','tapi','orang','dahlah',
            'alasan','halah','rindu','tidak','dia', 'senang', 'sangat'];
    

    foreach ($komunitas as $key => $nama) {
        echo "Nama: $nama <br>";

        if ($nama == 'gugun') {
            echo "Gugun ada di indeks ke-$key <br>";
            break;
        }
    } 
?>
