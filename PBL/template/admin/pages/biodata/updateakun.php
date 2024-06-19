<!-- Proses Update -->
<?php 
session_start();
require_once "../../../../config/koneksi.php";
require_once "../../../crud.php";

$database = new database();
$db = $database->getConnection();
$update = new UserManager($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$update->id = $_POST['user_id'];
$update->username = $_POST['username'];
$update->level = $_POST['level'];
$update->password = $_POST['password'];
$update->salt = $_POST['salt'];
                               
if($update->updateakun()){
        echo"<script>alert('Update Data Aman')</script>";
        header("Location: dashboard.php");
    } else {
        echo"<script>alert('Update Data gagal')</script>";
    }
}
?>