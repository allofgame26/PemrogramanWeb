<?php
    function hitungumur ($thnlahir, $thnsekarang) {
        $umur = $thnsekarang - $thnlahir;
        return $umur;
    }

    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo "$salam ";
        echo "Perkenalkan, nama saya ". $nama ."<br>";
        echo "Senang berkenalan dengan Anda <br>";
    }

    perkenalan("Arya");

    echo "Umur saya adalah : ". hitungumur(2003, 2024) . "Tahun <br>";
    echo "Senang berkenalan dengan anda<br>";
?>