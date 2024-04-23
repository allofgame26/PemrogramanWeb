<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
        $belibuku = $_COOKIE['belibuku'];
        $belinovel = $_COOKIE['belinovel'];

        echo "Jumlah Novel : " . $belinovel . "<br>";
        echo "Jumlah Buku  : " . $belibuku;
    ?>
</body>
</html>