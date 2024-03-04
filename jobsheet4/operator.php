<?php
    $a =10;
    $b = 5;

    $hasiltambah = $a + $b;
    $hasilkurang = $a - $b;
    $hasilkali = $a * $b;
    $hasilbagi = $a / $b;
    $sisabagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil tambah : $hasiltambah <br>";
    echo "Hasil Kurang : $hasilkurang <br>";
    echo "Hasil Kali : $hasilkali <br>";
    echo "Hasil Bagi : $hasilbagi <br>";
    echo "Hasil Sisa Bagi : $sisabagi <br>";
    echo "Hasil Pangkat : $pangkat <br><br>";

    $hasilsama = $a == $b;
    $hasiltidaksama = $a != $b;
    $hasillebihkecil = $a < $b;
    $hasillebihbesar = $a > $b;
    $hasillebihkecilsama = $a <= $b;
    $hasillebihbesarsama = $a >= $b;

    echo "Hasil Sama dengan : $hasilsama <br>";
    echo "Hasil tidak sama dengan : $hasiltidaksama <br>";
    echo "Hasil lebih kecil : $hasillebihkecil <br>";
    echo "Hasil lebih besar : $hasillebihbesar <br>";
    echo "Hasil lebih kecil sama dengan : $hasillebihkecilsama <br>";
    echo "Hasil lebih besar sama dengan : $hasillebihbesarsama <br><br>";

    $and = $a && $b;
    $or = $a || $b;
    $nota = !$a;
    $notb = !$b;

    echo "Hasil AND : $and <br>";
    echo "Hasil OR : $or <br>";
    echo "Hasil NOT A : $nota <br>";
    echo "Hasil NOT B : $notb<br><br>";

    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;

    echo "A += : $a<br>";
    echo "A -= : $a<br>";
    echo "A *= : $a<br>";
    echo "A /= : $a<br>";
    echo "A %= : $a<br><br>";

    $identik = $a === $b;
    $tidakidentik = $a !== $b;

    echo "Hasil Identik : $identik<br>";
    echo "Hasil tidak identik : $tidakidentik<br><br>"
?>