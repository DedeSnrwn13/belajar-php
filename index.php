<?php

$karyawan = [
                ['nama' => 'Toni', 'alamat' => 'Bandung'],
                ['nama' => 'Naufal', 'alamat' => 'Bandung'],
                ['nama' => 'Davi', 'alamat' => 'Jakarta']
            ];
$data = serialize($karyawan);
file_put_contents('data_karyaawan.txt', $data);
$output = file_get_contents('data_karyaawan.txt');
// echo $output;
$hasil = unserialize($output);
print_r($hasil);


$anggota = [
                ['nama' => 'Toni', 'alamat' => 'Bandung'],
                ['nama' => 'Naufal', 'alamat' => 'Bandung'],
                ['nama' => 'Davi', 'alamat' => 'Jakarta']
            ];
$data_anggota = json_encode($anggota);
file_put_contents('data_anggota.txt', $data_anggota);
$output_anggota = file_get_contents('data_anggota.txt');
$hasil_anggota = json_decode($output_anggota, true);
print_r($hasil_anggota);

?>
