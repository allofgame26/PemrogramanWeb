<?php

    $db = 'localhost';
    $user = 'root';
    $pass = '';
    $name = 'uts';

    $conn = new mysqli($db,$user,$pass,$name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>