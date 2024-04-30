<?php
    include "koneksi.php";

    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "Select * from pengguna where user = '$user' AND PASSWORD = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == 1){
        echo "Anda berhasil Login, silahkan masuk";?>
        <a href="homeadmin.html"> Halaman Home </a>
        <?php
    } else if ($row['level'] == 2) {
        echo "Anda berhasil Login, silahkan masuk";?>
        <a href="homeguest.html">Halaman Home</a>
        <?php
    } else {
        echo "Anda Gagal Login"; ?>
        <a href="loginform.html">Halaman Home </a>
        <?php
        echo mysqli_error($conn);
    }
?>