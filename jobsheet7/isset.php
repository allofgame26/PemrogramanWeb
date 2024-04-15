<?php
$data = array("nama" => "Jano", "Usia" => 25);
    if(isset($data['nama'])){
        echo "Nama : " .$data["nama"];
    } else {
        echo "variabel 'umur' tidak ditemukan dalam array";
    }
?> 