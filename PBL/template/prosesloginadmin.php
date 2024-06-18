<?php
      require_once "../config/koneksi.php";
      require_once "crud.php";
      
      $database = new database();
      $db = $database->getConnection();

      $error = '';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST['username'];
          $password = $_POST['password'];
          
          // Lakukan proses login
          $userManager = new UserManager($db);
          $user = $userManager->login($username, $password);

          if($user) {
              // Set session dan redirect ke halaman dashboard
              session_start();
              $_SESSION['user_id'] = $user['user_id'];
              $_SESSION['user_name'] = $user['username'];
              header("Location: /pages/biodata/dashboard.php");
              exit();
          } else {
              $error = "Login failed. Invalid email or password.";
          }
      }
    ?>