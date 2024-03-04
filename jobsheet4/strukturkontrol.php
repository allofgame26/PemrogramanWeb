<?php
$nilainumerik = 92;

if($nilainumerik >= 90 && $nilainumerik <= 100){
    echo "Nilai Huruf : A";
} elseif ($nilainumerik >= 80 && $nilainumerik < 90){
    echo " Nilai huruf : B";
} elseif ($nilainumerik >=70 && $nilainumerik < 80){
    echo "Nilai huruf : C";
} elseif ($nilainumerik < 70 ){
    echo "Nilai huruf : D";
}
echo "<br><br>";

$jaraksaatini = 0;
$jaraktarget = 500;
$peningkatanwaktu = 30;
$hari = 0;

while ($jaraksaatini < $jaraktarget){
    $jaraksaatini += $peningkatanwaktu;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";
echo "<br><br>";

$jumlahlahan = 10;
$tanamanperlahan = 5;
$buahpertanaman = 10;
$jumlahbuah = 0;

for ($i = 1; $i <= $jumlahlahan; $i++){
    $jumlahbuah += ($tanamanperlahan * $buahpertanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahbuah";
echo "<br><br>";

$skorujian = [85, 92, 78, 96, 88];
$totalskor = 0;

foreach($skorujian as $skor){
    $totalskor += $skor;
}

echo "Total skor ujian adalah : $totalskor<br><br>";

$nilaisiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaisiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}
?>