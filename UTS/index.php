<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS "FORM REGISTER KARYAWAN"</title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!--Font Dari Google-->
    <link rel="preconnect"  href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<form action="register.php" method="POST" style="border:2px solid #ccc">
  <div class="container">
    <h1>Register Karyawan Baru</h1>
    <p>Silahkan Isi Biodata Anda di bawah ini</p>
    <hr>

    <label for="nik"><b>NIK (Nomor Induk Keluarga)</b></label>
    <input type="text" placeholder="Masukkan NIK" name="nik" required>

    <label for="nama"><b>Nama</b></label>
    <input type="text" placeholder="Masukkan Nama" name="nama" required>

    <label for="tempat"><b>Tempat Lahir</b></label>
    <input type="text" placeholder="Masukkan Tempat Lahir" name="tempat" required>

    <label for="tanggal"><b>Tanggal Lahir : </b></label>
    <input type="date" name="tanggal" required><br><br>

    <label for="kelamin"><b>Kelamin : </b></label><br><br>
    <input type="radio" name="kelamin" value="laki">
    <label for="laki">Laki - Laki</label><br><br>
    <input type="radio" name="kelamin" value="perempuan">
    <label for="laki">Perempuan</label><br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="pass" required>
    <input type="checkbox" onclick="hide()">Tampilkan Password<br><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="passp" required>
    <input type="checkbox" onclick="hidep()">Tampilkan Password<br><br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
<!-- hide paswowrd -->
<script>
    function hide(){
      var x = document.getElementById("pass");
      if(x.type === "password"){
        x.type = "text";
      }else{
        x.type = "password";
      }
    }
    function hidep(){
      var x = document.getElementById("passp");
      if(x.type === "password"){
        x.type = "text";
      }else{
        x.type = "password";
      }
    }
</script>
