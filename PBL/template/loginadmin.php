<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        function loadHTML(file, elementId) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(elementId).innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            loadHTML('header.php', 'header');
            loadHTML('footer.php', 'footer');
        });
    </script>
    <?php
      session_start();
      require_once "../config/koneksi.php";
      require_once "crud.php";

      $database = new database();
      $db = $database->getConnection();

      $error = '';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = isset($_POST['username']) ? $_POST['username'] : '';
          $password = isset($_POST['password']) ? $_POST['password'] : '';
          
          // Lakukan proses login hanya jika email dan password tidak kosong
          if (!empty($username) && !empty($password)) {
              $userManager = new UserManager($db);
              $user = $userManager->login($username, $password);

              if($user) {
                  // Set session dan redirect ke halaman dashboard
                  $_SESSION['user_id'] = $user['user_id'];
                  $_SESSION['username'] = $user['username'];
                  header("Location: admin/pages/biodata/dashboard.php");
                  exit();
              } else {
                  $error = "Login failed. Invalid Username or password.";
              }
          } else {
              $error = "Please fill in both Username and password.";
          }
      }
    ?>
    <style>
        .background {
            background-image: url('img/main2.jpg');
            background-repeat: no-repeat;
            background-size: cover; /* Atur ukuran gambar agar mencakup seluruh elemen */
            background-position: center; /* Posisikan gambar di tengah */
            height: 100vh;
            filter :blur(0px);
            filter : brightness(100%)
        }
        .text{
            position: absolute; /* Menentukan posisi absolut */
            top: 50%; /* Posisi teks di tengah vertikal */
            left: 50%; /* Posisi teks di tengah horizontal */
            filter :brightness(200%);
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #footer{
            background-color: #1C60B0;
        }
        #header{
            background-color: #1C60B0;
        }
    </style>
</head>
<body>
    <div id="header"></div>
    <section class="vh-100" style="background-color: #8a93e3;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in Admin</h3>

            <?php if($error): ?>
               <script>
                  alert('<?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>');
               </script>
            <?php endif; ?>

            <form method="POST" action="">
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="username" class="form-control form-control-lg" name="username" />
              <label class="form-label" >Username</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" class="form-control form-control-lg" name="password" />
              <label class="form-label">Password</label>
            </div>

            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
            <center><a href="lupa.php">Lupa Password?</a></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <div id="footer"></div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- Sangat dibutuhkan, jangan dilupakan -->
</body>
</html>
