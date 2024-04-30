<?php
include ('koneksi.php');

$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['no_telp'];

if($aksi == 'tambah'){
    $sql = "insert into anggota (nama, jenis_kelamin, alamat, no_telp) values ('$nama','$jeniskelamin','$alamat','$notelp')";
    if(mysqli_query($conn,$sql)){
        header("location :index.php");
    } else {
        echo "Gagal Menambahkan Data".mysqli_error($conn);
    }
}

mysqli_close($conn);
?>