<?php
    include "koneksi.php";

    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "Select * from pengguna where user = '$user' AND PASSWORD = '$pass'";
    $result = mysqli_query($conn,$sql);
    $cek = mysqli_num_rows($result);

    if($cek > 0 ){
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['status'] = 'login';
        ?>
    Anda Berhasil Login, silahkan menuju
    <a href="homesession.php">Halaman Utama</a> <?php
    } else {
        ?>
        Gagal Login, silahkan login lagi
        <a href="sessionlogin.html">Halaman Login</a> <?php
        echo mysqli_error($conn);
    }
?>