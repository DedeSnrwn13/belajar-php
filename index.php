<?php 

$a = [250, true, ["jeruk", "pepaya", "pisang"]];
echo $a[2][0];

$herbivora = ["kambing", "sapi", "kerbau"];
$karnivora = ["harimau", "singa", "serigala"];
$omnivora = ["ayam", "monyet", "babi"];

$binatang = ["herbivora" => $herbivora, "karnivora" => $karnivora, "omnivora" => $omnivora];

echo $binatang["karnivora"][2];

?>