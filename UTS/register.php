<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // data value
        $nik= $_POST['nik'];
        $nama= $_POST['nama'];
        $tempat= $_POST['tempat'];
        $tanggal= $_POST['tanggal'];
        $kelamin= $_POST['kelamin'];
        $email= $_POST['email'];
        $password= $_POST['psw'];

        // mameasukkan ke database
        $sql = "INSERT INTO karyawan (nik,nama,tempat,tanggal,kelamin,email,pass) values ('$nik','$nama','$tempat','$tanggal','$kelamin','$email','$password')";

        if ($conn->query($sql)=== TRUE){
            echo "<script>
                    alert('Data telah tersimpan');
                    window.location.href = 'http://localhost/dasarweb/UTS/login.php';
                </script>";
        } else {
            echo "<script>
                alert('Data Tidak Tersimpan');
            </script>";
        }
    }
?>