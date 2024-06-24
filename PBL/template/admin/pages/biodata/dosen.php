<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="starter.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="logout.php">
      <button type="button" class="btn btn-block btn-danger">Log Out</button>
      </a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active"> <!--untuk pindah ke starter  ..\..\starter.html-->
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="akun.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="biodata.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Biodata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengguna.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="orangtua.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orang Tua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tendik.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tenaga Kependidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="almuni.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mitra.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mitra Industri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dosen.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Survey
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pertanyaan.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pertanyaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kategori.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jenissoal.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Soal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hasil Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hasil.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Jawaban Responden</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Dosen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-block btn-primary" onclick="togglePopup()">+ Tambah</button>
                <!-- Membuat Pop Up Form -->
                <script>
                  function togglePopup() { 
                      const overlay = document.getElementById('popupOverlay'); 
                      overlay.classList.toggle('show'); 
                  } 
                </script>
                <br>
                <?php
                  require_once "../../../../config/koneksi.php";
                  require_once "../../../cruddosen.php";
                
                  $database = new database();
                  $db = $database->getConnection();
                  $user = new UserManager($db);

                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['create'])) {
                        $user->id_pengguna = $_POST['id_pengguna'];
                        $user->nip = $_POST['nip'];
                        $user->create();
                    } elseif (isset($_POST['update'])) {
                        $user->id_dosen = $_POST['id_dosen'];
                        $user->id_pengguna = $_POST['id_pengguna'];
                        $user->nip = $_POST['nip'];
                        $user->update();
                    } elseif (isset($_POST['delete'])) {
                        $user->id_dosen = $_POST['id_dosen'];
                        $user->delete();
                    }
                }

                  $stmt = $user->readAll();
                ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Dosen</th>
                    <th>ID Pengguna</th>
                    <th>Nomor Induk Pengajar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  require_once "../../../../config/koneksi.php";
                  require_once "../../../cruddosen.php";
                
                  $database = new database();
                  $db = $database->getConnection();
                  $user = new UserManager($db);

                  $stmt = $user->readAll();
                  ?>
                  <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['id_dosen']); ?></td>
                      <td><?php echo htmlspecialchars($row['id_pengguna']); ?></td>
                      <td><?php echo htmlspecialchars($row['nip']); ?></td>
                      <td>
                          <button class = "btn btn-success" onclick="togglePopup('<?php echo $row['id_dosen']; ?>','<?php echo $row['id_pengguna']; ?>', '<?php echo $row['nip']; ?>')">Edit</button>
                          <form method="post" style="display:inline-block;">
                              <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']; ?>">
                              <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                          </form>
                      </td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Dosen</th>
                    <th>ID Pengguna</th>
                    <th>Nomor Induk Pengajar</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 </strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Toogle Popup -->
<div id="popupOverlay" class="overlay-container"> 
                      <div class="popup-box"> 
                      <span class="close" onclick="togglePopup()">&times;</span>
                            <h2 style="color: green;" id="popupTitle">Tambah User</h2> 
                            <form method="post" class="form-container"  action="" id="userForm">
                              <input type="hidden" id="id_dosen" name="id_dosen"> 
                              <label class="form-label" for="id_pengguna">ID Pengguna:</label>
                                    <select name="id_pengguna" id="id_pengguna">
                                      <?php

                                      require_once "../../../../config/koneksi.php";
                                      require_once "../../../cruddosen.php";

                                      $database = new Database();
                                      $db = $database->getConnection();

                                      $item = new UserManager($db);
                                      $stmn = $item->readPengguna();                                       

                                      while ($row = $stmn->fetch(PDO::FETCH_ASSOC)) {
                                          echo "<option value='" . htmlspecialchars($row['id_pengguna']) . "'>" . htmlspecialchars($row['nama']) . "</option>";
                                      }
                                      ?>
                                  </select><br> 
                                <label class="form-label" for="nip">No Pegawai:</label>
                                <input class="form-input" type="text" placeholder="Masukkan nip" name="nip" id="nip" required>
                                <br>
                                <button class="btn-submit" id="formButton" type="submit" name="create"> 
                                  Submit 
                                </button> 
                            </form> 
                        </div> 
                  </div>

                  <script>
                    function togglePopup(id_dosen = '',id_pengguna = '',nip = '') {
                        const overlay = document.getElementById('popupOverlay');
                        overlay.classList.toggle('show');

                        if (id_dosen) {
                            document.getElementById('popupTitle').innerText = 'Edit User';
                            document.getElementById('id_dosen').value = id_dosen;
                            document.getElementById('id_pengguna').value = id_pengguna;
                            document.getElementById('nip').value = nip;
                            document.getElementById('formButton').name = 'update';
                            document.getElementById('formButton').innerText = 'Update User';
                        } else {
                            document.getElementById('popupTitle').innerText = 'Add New User';
                            document.getElementById('userForm').reset();
                            document.getElementById('formButton').name = 'create';
                            document.getElementById('formButton').innerText = 'Add User';
                        }
                    }
                    </script>

                  <style>
                    #editPopup {
                      display: none;
                      position: fixed;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      background-color: white;
                      padding: 20px;
                      border: 1px solid #ddd;
                      z-index: 100;
                    }
                    .btn-open-popup { 
                          padding: 12px 24px; 
                          font-size: 18px; 
                          background-color: green; 
                          color: #fff; 
                          border: none; 
                          border-radius: 8px; 
                          cursor: pointer; 
                          transition: background-color 0.3s ease; 
                      } 
                
                      .btn-open-popup:hover { 
                          background-color: #4caf50; 
                      } 
                
                      .overlay-container { 
                          display: none; 
                          position: fixed; 
                          top: 0; 
                          left: 0; 
                          width: 100%; 
                          height: 100%; 
                          background: rgba(0, 0, 0, 0.6); 
                          justify-content: center; 
                          align-items: center; 
                          opacity: 0; 
                          transition: opacity 0.3s ease; 
                      } 
                
                      .popup-box { 
                          background: #fff; 
                          padding: 24px; 
                          border-radius: 12px; 
                          box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); 
                          width: 320px; 
                          text-align: center; 
                          opacity: 0; 
                          transform: scale(0.8); 
                          animation: fadeInUp 0.5s ease-out forwards; 
                      } 
                
                      .form-container { 
                          display: flex; 
                          flex-direction: column; 
                      } 
                
                      .form-label { 
                          margin-bottom: 10px; 
                          font-size: 16px; 
                          color: #444; 
                          text-align: left; 
                      } 
                
                      .form-input { 
                          padding: 10px; 
                          margin-bottom: 20px; 
                          border: 1px solid #ccc; 
                          border-radius: 8px; 
                          font-size: 16px; 
                          width: 100%; 
                          box-sizing: border-box; 
                      } 
                
                      .btn-submit, 
                      .btn-close-popup { 
                          padding: 12px 24px; 
                          border: none; 
                          border-radius: 8px; 
                          cursor: pointer; 
                          transition: background-color 0.3s ease, color 0.3s ease; 
                      } 
                
                      .btn-submit { 
                          background-color: green; 
                          color: #fff; 
                      } 
                
                      .btn-close-popup { 
                          margin-top: 12px; 
                          background-color: #e74c3c; 
                          color: #fff; 
                      } 
                
                      .btn-submit:hover, 
                      .btn-close-popup:hover { 
                          background-color: #4caf50; 
                      } 
                
                      /* Keyframes for fadeInUp animation */ 
                      @keyframes fadeInUp { 
                          from { 
                              opacity: 0; 
                              transform: translateY(20px); 
                          } 
                
                          to { 
                              opacity: 1; 
                              transform: translateY(0); 
                          } 
                      } 
                
                      /* Animation for popup */ 
                      .overlay-container.show { 
                          display: flex; 
                          opacity: 1; 
                      } 
                  </style>
</body>
</html>
