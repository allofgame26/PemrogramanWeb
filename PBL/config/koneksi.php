<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'pbl';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<script>alert('Koneksi Tersambung ke Database')</script>";
        } catch(PDOException $exception) {
            echo "<script>alert('Koneksi Tidak Tersambung ke Database')</script>"; 
        }

        return $this->conn;
    }
}

$database = new database();
$db = $database->getConnection();
?>
