<?php
  session_start();
  require_once "../../../../config/koneksi.php";
  require_once "../../../crud.php";

  $database = new database();
  $db = $database->getConnection();

  $userManager = new UserManager($db);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userManager->username = $_POST['name'];
    $userManager->level = $_POST['level'];
    $userManager->password = $_POST['password'];
    $userManager->salt = $_POST['salt'];

    if($userManager->create()){
      echo"<script>alert('Entry Data Aman')</script>";
      header("Location: dashboard.php");
    } else {
      echo"<script>alert('Entry  Data gagal')</script>";
    }
  }
?>