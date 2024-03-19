<?php

    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo "$salam ";
        echo "Perkenalkan, nama saya ". $nama ."<br>";
        echo "Senang berkenalan dengan Anda <br>";
    }

    perkenalan("Arya","Hallo");

    echo "<hr>";

    $saya = "Elok";
    $ucapansalam = "Selamat Pagi";

    perkenalan($saya);
?>