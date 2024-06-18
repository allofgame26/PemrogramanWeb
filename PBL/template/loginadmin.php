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
      require_once "../config/koneksi.php";
      require_once "crud.php";
      
      $database = new database();
      $db = $database->getConnection();
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

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Username</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
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
