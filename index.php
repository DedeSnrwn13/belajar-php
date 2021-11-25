<?php

$message = "Selamat Datang, Apa kabar?\n"; // \n untuk membuat baris baru
// menulis file
file_put_contents('content.txt', $message, FILE_APPEND);
// membaca file 
$isi_file = file_get_contents('content.txt');
echo $isi_file;

?>
