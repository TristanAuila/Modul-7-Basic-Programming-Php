<?php

$total_belanja = 1000;

echo "total belanja anda $total_belanja <br>";
if ($total_belanja >= 1000) {
    echo "Selamat anda mendapat diskon Rp. 500";
}else {
    echo "Anda tidak mendapat diskon";
      }

//====================================================================================

$hari= "senin";

if ($hari == "senin"){
    echo "Mengunakan seragam Putih Abu";
} else if($hari == "selasa") {
    echo "Mengunakan seragam pramuka";
} else if($hari == "rabu") {
    echo "Mengunakan seragam productive";
} else if($hari == "kamis") {
    echo "Mengunakan seragam batik";
} else if($hari == "jumat") {
    echo "Mengunakan seragam gamis";
}