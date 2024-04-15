<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <?php
    $namaerr = "";
    $nama = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['nama'])){
            $namaerr = "Nama Harus Diisi";
        } else {
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan";
        }
    }
    ?>
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?php $nama; ?>">
    <span class="error"><?php echo $namaerr; ?></span><br><br>
    <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>