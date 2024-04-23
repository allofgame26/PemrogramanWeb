<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Session</title>
</head>
<body>
    <?php
        session_start();
        
        if($_SESSION['status'] == 'login'){
            echo "Selamat Datang " . $_SESSION['username'];
            ?>
            <br> <a href="sessionlogout.php"> Log Out</a>
            <?php
        } else {
            echo "Anda Belum Login, Silahkan"?>
            <a href="sessionlogin.html">Login</a>
            <?php
        }
    ?>
</body>
</html>