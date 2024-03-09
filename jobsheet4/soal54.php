<?php

$nilai_siswa = array(
    array("nama" => "Alice", "nilai" => 85),
    array("nama" => "Bob", "nilai" => 92),
    array("nama" => "Charlie", "nilai" => 78),
    array("nama" => "David", "nilai" => 64),
    array("nama" => "Eva", "nilai" => 90)
);


$total_nilai = 0;
foreach ($nilai_siswa as $siswa) {
    $total_nilai += $siswa["nilai"];
}
$rata_rata_kelas = $total_nilai / count($nilai_siswa);


echo "Daftar nilai siswa yang di atas rata-rata kelas:\n <br>";
foreach ($nilai_siswa as $siswa) {
    if ($siswa["nilai"] > $rata_rata_kelas) {
        echo $siswa["nama"] . ": " . $siswa["nilai"] . "\n<br>";
    }
}
?>
