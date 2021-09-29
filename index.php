<?php 

$pesan = null;

$datadiri = [
    'nama' => 'Michael',
    'goldarah' => null,
    'alamat' => 'Jayapura'
];

echo $datadiri['status'] ?? 'Data Tidak Ada';
// echo $datadiri['goldarah'];
// echo $pesan;

?>