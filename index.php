<?php
    $alas = 10;
    $tinggi = 20;

    function luasSegiTiga($alas, $tinggi)
    {
        $luas = $alas * $tinggi / 2;
        return $luas;
    }

    function luasJajarGenjang($alas, $tinggi)
    {
        $luas = $alas + $tinggi * 2;
        return $luas;
    }

    echo $luasSegiTiga = luasSegiTiga($alas, $tinggi);
    echo $luasJajarGenjang = luasJajarGenjang($alas, $tinggi);
?>
