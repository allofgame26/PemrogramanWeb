<?php
    include "koneksi.php";

    if(isset($_POST['login'])){
        $user = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "Select * from karyawan where email = '$user'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s',$user);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user){
            //validasi password
            if(password_verify($pass,$user['password_hash'])){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user['nama'];

                header('location: dashboard/index.html');
                exit;
            } else {
                echo "<script>
                alert('Salah Password');
                    </script>";
            }
        } else {
            echo "<script>
                alert('Salah Password');
                    </script>";
        }
        $stmt->close();
    } else {
        Echo "Ada Kesalahan";
    }
    $conn->close();
?>