<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Login</title>
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
    <style>
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

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Mahasiswa</h4>
            </div>
            <div class="card-body">
                <img src="img/mahasiswa.jpg" width="250" height="250" a href="">
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Dosen</h4>
            </div>
            <div class="card-body">
                <img src="img/dosen.jpg" width="250" height="250">
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Alumni</h4>
            </div>
            <div class="card-body">
                <img src="img/alumni.jpg" width="250" height="250">
            </div>
            </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Tendik</h4>
                </div>
                <div class="card-body">
                    <img src="img/tendik.jpg" width="250" height="250">
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Industri</h4>
                </div>
                <div class="card-body">
                <img src="img/industri.jpg" width="250" height="250">
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Orang Tua</h4>
                </div>
                <div class="card-body">
                <img src="img/ortu.jpg" width="250" height="250">
                </div>
                </div>
            </div>
        </div>
    </div>
    

    <div id="footer"></div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- Sangat dibutuhkan, jangan dilupakan -->
</body>
</html>

