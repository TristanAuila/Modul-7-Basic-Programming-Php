<?php

echo "StudiKasus";
echo "<hr>";

$gaji="15000000";
$status="tetap";    


if ($gaji >= "15000000" && $status <="tetap"){
    $pajak = 20;

}
elseif ($gaji >= "10000000"  && $status <="tetap"){
   $pajak = 15;

}
elseif ($gaji <= "10000000" && $status <="tetap"){
   $pajak = 10;


}
elseif ($gaji <= "5000000" && $status >="tetap"){
    $pajak = 5;

}







if ($gaji >= "15000000" && $status <="Kontrak"){
    $pajak = 20;

}
elseif ($gaji >= "10000000"  && $status <="Kontrak"){
   $pajak = 15;

}
elseif ($gaji <= "10000000" && $status <="Kontrak"){
   $pajak = 10;


}
elseif ($gaji <= "5000000" && $status >="Kontrak"){
    $pajak = 5;

}

$persen = $pajak / 100;
$potongan= $gaji * $persen;

echo "Gaji bulanan : Rp." . $gaji . "<br>";
echo "Status Pengawai : " . $status . "<br>";
echo "Persentase Pajak : " . $pajak . "% <br>";
echo "Potong Pajak : " . $potongan . "<br>";
echo "Gaja Berish : Rp. " . $gaji - $potongan . "<br>";