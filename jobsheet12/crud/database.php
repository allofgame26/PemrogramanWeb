<!-- PRAKTIKUM 2 - CRUD dengan OOP
buat file baru dengan nama database.php dan mengetikkan kode -->

<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = ""; // belum menentukan nilai untuk $password
    private $database = "jobsheet11";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
