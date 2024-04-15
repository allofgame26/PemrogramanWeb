
<?php
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['submit'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        if ($input == "submit_value") {
            $message = "Form telah disubmit!";
        } else {
            $message = "Input tidak valid!";
        }

        $email =$_POST['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            
        } else {
            echo "E-mail Tidak Valid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Form PHP</h1>
    
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="input" name="input" value=""></input><br>
        <label for="email">Email</label>
        <Input type="email" id="email" name="email" value=""></Input><br>
        <input type="submit" value="Submit">
    </form>

    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>