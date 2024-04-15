<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS "FORM REGISTER KARYAWAN"</title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form action="action_page.php" style="border:2px solid #ccc">
  <div class="box">
    <h1>Login Karyawan Baru</h1>

    <input type="text" placeholder="Enter Email" name="email" required>

    <input type="password" placeholder="Enter Password" name="psw" id="pass" required>
    <input type="checkbox" onclick="hide()">Tampilkan Password<br><br>

    <input type="submit" class="cancelbtn"></button>
    <input type="submit" name="" value="Login"></button>
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
</script>