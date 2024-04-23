<?php
    include "koneksi.php";

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "Select * from pengguna where user = '$user' AND PASSWORD = '$pass'";
    $result = mysqli_query($conn,$sql);
    $cek = mysqli_num_rows($result);

    if($cek){
        echo "Anda berhasil Login"; ?>
        <a href="homeadmin.html">Halaman Home </a>
        <?php
    } else {
        echo "Anda Gagal Login"; ?>
        <a href="loginform.html">Halaman Home </a>
        <?php
        echo mysqli_error($conn);
    }
?>