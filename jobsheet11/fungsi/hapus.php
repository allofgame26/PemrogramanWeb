<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['id'])) {
        $id = antiinjection($koneksi, $_GET['id']);

        $query = "DELETE FROM jabatan WHERE id_jabatan = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
        
        $id = antiinjection($koneksi, $_GET['id']);

        $query = "DELETE FROM pengguna WHERE id_pengguna = '$id'";
        
        if (mysqli_query($koneksi, $query)) {
            $query2 = "DELETE FROM anggota WHERE id_anggota = '$id'";
            
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>