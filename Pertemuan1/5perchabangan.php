<?php

$uts = 80;
$uas = 100;
$tugas = 85;

$status= "";
$grade= "";

$rata= (($uts * $uas) + $tugas) / ($uas + 1);

if ($rata <= 70 && $rata <=79){
    $status = "Perbaikan";
    $grade= "c";
}
else if ($rata <= 80 && $rata <=89){
    $status = "Perbaikan";
    $grade= "B";
}
else if ($rata <= 90 && $rata <=100){
    $status = "Sangat Hebat";
    $grade= "A+";
}

echo "Nilai Uts: $uts <br>";
echo "Nilai Uas: $uas <br>";
echo "Nilai Tugas: $tugas <br>";

echo "<br> Rata-Rata: $rata <br>";
echo "Status: $status <br>";
echo "Grade: $grade <br>";


