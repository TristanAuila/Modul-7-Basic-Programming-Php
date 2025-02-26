<?php       

echo "OPERATOR ARITMATIKA <br>";
echo "<hr>";

$bill1 = 60; //int muj
$bill2 = 4; 

$hasil_penjumblahan= $bill1 + $bill2;
$hasil_pengurangan= $bill1 - $bill2;
$hasil_kali= $bill1 * $bill2;
$hasil_pembagian= $bill1 / $bill2;
$hasil_sisa_bagi= $bill1 % $bill2;
$hasil_pangkat= $bill1 ** $bill2;

echo "Hasil Penjumblahan : . $bill1+$bill2 =". $hasil_penjumblahan . "<br>";
echo "Hasil Pengurangan : . $bill1-$bill2 = ". $hasil_pengurangan . "<br>";
echo "Hasil Kali : . $bill1*$bill2 = ". $hasil_kali . "<br>";
echo "Hasil Pembagian : . $bill1/$bill2 =". $hasil_pembagian . "<br>" ;
echo "Hasil sisa bagi : . $bill1%$bill2 =". $hasil_sisa_bagi . "<br>" ;
echo "Hasil pangkat : . $bill1**$bill2 =". $hasil_pangkat . "<br>" ;