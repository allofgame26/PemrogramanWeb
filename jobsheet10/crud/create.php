<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required><br>
            <label for="jenis_kelamin">Jenis Kelamin </label><br>
            <div class="radio-group">
                <input type="radio" name="jenis_kelamin" value="l" id="laki" required><label for="laki">Laki - Laki </label>
                <input type="radio" name="jenis_kelamin" value="p" id="perempuan" required><label for="perempuan">Perempuan </label>
            </div><br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required>
            <label for="no_telp">No. Telp</label>
            <input type="text" name="no_telp" id="no_telp" required>
            <button type="submit">Simpan Data</button>
            <button type="kembali" href="index.php" class="btn-kembali">Kembali</button>
        </form>
    </div>
</body>
</html>