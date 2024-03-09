<?php
    $pelanggan = 120000;
    $harga = 0;
    if($pelanggan > 100000){
        $harga = $pelanggan - ($pelanggan * 0.2);
        echo "Harga yang harus dibayarkan : " .$harga;
    } else{
        echo "Maaf anda belum mendapatkan diskon";
    }
?>