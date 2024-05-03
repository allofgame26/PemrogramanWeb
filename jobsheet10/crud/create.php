<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post"> <!--Pembuatan form dengan aksi ke "proses.php?aksi=tambah" dengan method post-->
        <div class="form-group">
                <label for="nama">Nama: </label> <!--Pembuatan Label nama-->
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin: </label> <!--Pembuatan Label jenis kelamin-->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="p" id="perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat: </label> <!--Pembuatan Label alamat-->
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp:</label> <!--Pembuatan Label No. Telp-->
                <input type="text" class="form-control" name="no_telp" id="no_telp" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>

    <!--import script bootstrap, dan lainnya-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>