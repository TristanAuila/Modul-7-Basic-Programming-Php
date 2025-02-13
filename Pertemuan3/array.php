<?php

$produk = ["laptop","monitor","mouse"];

echo $produk[0] . "<br>";
echo $produk[1] . "<br>";
echo $produk[2] . "<br>";

echo "<hr> <br>";


$buah = [
    "nama" => "apple",
    "warna" => "hijau",
    "rasa" => "asam"

];

echo "nama buah " . $buah ['nama'] . "<br>";
echo "nama warna " . $buah ['warna'] . "<br>";
echo "nama rasa " . $buah ['rasa'] . "<br>";

echo "<hr> <br>";


$produk2 = [
    ["nama" => "laptop", "harga" => 7500000, "stok" => 4],
    ["nama" => "monitor", "harga" => 1000000, "stok" => 4],
    ["nama" => "mouse", "harga" => 1500000, "stok" => 4],
];

foreach($produk2 as $p){
    echo "Nama Produk " . $p ['nama'] .  

    ", harga: Rp" . number_format($p ['harga'], 0, ".", ".") .

    ", stok " . $p ['stok'] . "<br>";

};

echo "<hr> <br>";
