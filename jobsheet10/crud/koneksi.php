<?php
    $conn = mysqli_connect("localhost","root","","prakwebdb");
var_dump($conn);
// die();
    if(mysqli_connect_errno()){
        die("Koneksi database gagal : " .mysqli_connect_error());
    }
?>