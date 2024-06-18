<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner</title>
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
            background-color: #538ce0;
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
</head>
<body>
    <div id="header"></div>
    <section style="background-color: #8a93e3;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <h3 class="mb-5"><center>Isi Kuisioner <br> Survei Kualitas Pendidikan Politeknik Negeri Malang</center></h3>

              <h4>Petunjuk Pengisian</h4>
              <br>
              <br>
              <h5>Pada Bagian Jawaban terdapat empat pilihan dengan keterangan berikut : 
                <br>
                1 : Sangat Tidak Setuju
                <br>
                2 : Tidak Setuju
                <br>
                3 : Setuju
                <br>
                4 : Sangat Setuju
              </h5>
          </div>
      </div>
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Dosen memberitahu silabus mata kuliah di awal perkuliahan.</td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                  </tr>
                  <tr>
                  <th scope="row">2</th>
                    <td>Dosen mengajar mata kuliah sesuai dengan kompetensinya.</td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                  </tr>
                  <tr>
                  <th scope="row">3</th>
                    <td>Dosen memulai perkuliahan tepat waktu.</td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                    <td>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit" a href="">Beranda</button>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Next</button>
            </div>
        </div>
    </div>
  </div>
</section>
    <div id="footer"></div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- Sangat dibutuhkan, jangan dilupakan -->
</body>
</html>
