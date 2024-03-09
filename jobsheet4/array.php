<?php
    $nilaimahasiswa = [85,92,78,64,90,55,88,79,70,96];
    $nilailulus = [];

    foreach ($nilaimahasiswa as $nilai) {
        if ($nilai >= 70) {
            $nilailulus[] = $nilai;
        }
    }
    echo "Daftar nilai siswa yang lulus : ". implode(',',$nilailulus). "<br>";

    $karyawan = [
        ['Alice',7],
        ['Bob',3],
        ['Charlie',9],
        ['David',5],
        ['Eva',6],
    ];

    $karyawanlimatahun = [];

    foreach ($karyawan as $k) {
        if ($k[1] > 5) {
            $karyawanlimatahun[] = $k[0];
        }
    }

    echo "Daftar Karyawan Lebih dari lima tahun : ". implode(',', $karyawanlimatahun) . "<br>";

    $nilai = [
        "Matematika" => [
            ["Alice",85],
            ["Bob",92],
            ["Charlie",78],
        ], 
        "Fisika"=> [
            ["Alice",90],
            ["Bob",88],
            ["Charlie",75],
        ],
        "Kimia" => [
            ["Alice",92],
            ["Bob",80],
            ["Charlie",85],
        ],
    ];

    $matakuliah = "Fisika";

    echo "Daftar nilai mahasiswa dalam mata kuliah $matakuliah : <br>";

    foreach ($nilai[$matakuliah] as $kuliah){
        echo "Nama : {$kuliah[0]}, Nilai : {$kuliah[1]} <br>";
    }
?>