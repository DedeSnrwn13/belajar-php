<?php
    $nilai = "z";

    switch ($nilai) {
        case 'A':
            echo "Nilai anda sangat memuaskan";
            break;
        case 'B': 
            echo "Nilai anda memuaskan";
            break;
        case 'C': 
            echo "Nilai anda cukup";
            break;
        case 'D': 
            echo "Nilai anda kurang";
            break;
        default:
            echo "Nilai anda sangat kurang";
            break;
    }
?>
