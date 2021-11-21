<?php
   function cetakPesan($nama = null) {
       if (empty($nama)) {
           echo "Selamat Datang!";
       } else {
           echo "Selamat datang, $nama!";
       }
   }

   cetakPesan('rizal');
?>
