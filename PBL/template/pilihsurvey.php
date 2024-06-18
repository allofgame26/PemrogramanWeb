<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Survey</title>
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
            loadHTML('headeruser.php', 'header');
            loadHTML('footer.php', 'footer');
        });
    </script>
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
    <script>
        function myFunction() {
            var txt;
            if (confirm("Apakah Anda Yakin ?")) {
                alert("Data Sudah disimpan");
            } else {
                alert("Data Anda Gagal Disimpan");
            }
        }
    </script>
</head>
<body>
    <div id="header"></div>
        <div class="background">
            <div class="text">
                <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                   <h4 class="my-0 fw-normal">Survey Pelayanan</h4>
                                </div>
                                <div class="card-body">
                                    <a href="kuesioner.php"><img src="img/mahasiswa.jpg" width="250" height="250"></a>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Survey Pendidikan</h4>
                                </div>
                                <div class="card-body">
                                    <img src="img/dosen.jpg" width="250" height="250">
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Survey Infastruktur</h4>
                                </div>
                                <div class="card-body">
                                    <img src="img/dosen.jpg" width="250" height="250">
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Survey Lulusan</h4>
                                </div>
                                <div class="card-body">
                                    <img src="img/dosen.jpg" width="250" height="250">
                                </div>
                                </div>
                            </div>
                        </div>
                </div>        
            </div>
        </div>
    <div id="footer"></div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- Sangat dibutuhkan, jangan dilupakan -->
</body>
</html>
