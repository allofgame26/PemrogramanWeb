<?php
// Untuk set waktu di daerah asia/jakarta
date_default_timezone_set("Asia/Jakarta");
// Koneksi ke database (MySql)
$koneksi = mysqli_connect("localhost", "root", "", "jobsheet11");

// Periksa koneksi (jika koneksi database gagal akan menampilkan pesan ini)
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>