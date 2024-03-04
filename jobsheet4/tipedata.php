<?php
    $a = 10;
    $b = 5;
    $c = $a +5;
    $d = $b + (10+5);
    $e = $d - $c;

    echo "Variabel a : {$a} <br>";
    echo "Variabel b : {$b} <br>";
    echo "Variabel c : {$c} <br>";
    echo "Variabel d : {$d} <br>";
    echo "Variabel e : {$e} <br>";
    echo "<br>";

    $nilaimat = 5.1;
    $nilaiipa = 6.7;
    $nilaibi = 9.3;

    $totalrata = ($nilaimat + $nilaiipa + $nilaibi)/ 3;

    echo "Matematika : {$nilaimat} <br>";
    echo "IPA : {$nilaiipa} <br>";
    echo "Bahasa Indonesia : {$nilaibi} <br>";
    echo "Rata - Rata : {$totalrata} <br>";

    var_dump($totalrata);
    echo "<br>";
    echo "<br>";

    $lulus = true;
    $gagal = false;

    var_dump($lulus);
    echo "<br>";
    var_dump($gagal);

    $namadepan = "ibnu";
    $namabelakang = 'Jakaria';

    $namalengkap = "{$namadepan} {$namabelakang}";
    $namalengkap2 = $namadepan . " ". $namabelakang;

    echo "Nama Depan : {$namadepan} <br>";
    echo 'Nama Belakang : '. $namabelakang . '<br>';

    $listmahasiswa = ["Wahid Abdullah", "Elmo bactiar", "Lendis Fabri"];
    echo $listmahasiswa[0];
?>