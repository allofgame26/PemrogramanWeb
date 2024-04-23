<?php
    $host = "localhost";
    $db = "prakwebdb";
    $user = "root";
    $pass = "";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>