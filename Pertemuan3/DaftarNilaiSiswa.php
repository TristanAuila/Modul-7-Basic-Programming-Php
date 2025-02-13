<?php

$siswa = [
    ["siswa" => "Denis", "nilai" => 85, "status" => "Lulus"],
    ["siswa" => "Aksa", "nilai" => 60, "status" => "Remedial"],
    ["siswa" => "Rangga", "nilai" => 45, "status" => "Tidak Lulus"],
    ["siswa" => "Bima", "nilai" => 72, "status" => "Lulus"],
    ["siswa" => "Aodi", "nilai" => 50, "status" => "Remedial"],
];



echo "<center><h1>Daftar Nilai Siswa</h1><br></center>";

echo '<center><table border="1 cellpadding = "5" cellspacing = "0"></center>';
echo '<tr><th>Nama</th><th>Nilai</th><th>Status</th>';

foreach ($siswa as $s) {
    echo "<tr>"; 
    echo "<td>" .$s["siswa"]. "</td>";
    echo "<td>" .$s["nilai"].  "</td>";

if ($s ['nilai'] >= 70 ){
    $status = '<span style="color:green;">Lulus</span';
}
elseif ($s['nilai'] >= 50){
    $status = '<span style="color:orange;">Remedial</span';
}
elseif ($s['nilai'] <= 50 ){
    $status = '<span style="color:red;">Tidak Lulus</span';
}

    echo "<td>" . $status . "</td>";
echo "</tr>";


}

// Developer note: Guy next to me is a total idiot... well the left side.

echo '</table>';