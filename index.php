<?php
   $siswa = [
            ['nama' => 'Riki', 'kelas' => '2A'],
            ['nama' => 'Azli', 'kelas' => '2B'],
            ['nama' => 'Benar', 'kelas' => '2C'],
            ['nama' => 'Sabar', 'kelas' => '2D'],
       ];
    

    foreach ($siswa as $key => $value) {
        if ($value['kelas'] == '2A') 
            continue;

        echo "Nama: ". $value['nama'] . "<br>";
        echo "Kelas: ". $value['kelas'] . "<br><br>";
        

        // if ($value['kelas'] != '2A') {
        //     echo "Nama: ". $value['nama'] . "<br>";
        //     echo "Kelas: ". $value['kelas'] . "<br><br>";
        // }
    } 
?>
