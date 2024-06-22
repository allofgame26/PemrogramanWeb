<?php
    class User {
        private $conn;
        private $table_name = "jenis_soal";
        public $id_jenis_soal;
        public $nama_jenis;

        public function __construct($db) {
            $this->conn = $db;
        }

    }

    class UserManager {
        private $conn;
        private $table_name = "jenis_soal";
        public $id_jenis_soal;
        public $nama_jenis;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET nama_jenis=:nama_jenis";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nama_jenis", $this->nama_jenis);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Check User
        public function login($username, $password) {
            $user = new User($this->conn);
            $user->username = $username;
            $stmt = $user->findUserByEmail();

            if($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if($password === $row['password'] && $row['level'] === "admin") {
                    return $row;
                }
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama_jenis=:nama_jenis WHERE id_jenis-soal=:id_jenis_soal";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_jenis_soal", $this->id_jenis_soal);
        $stmt->bindParam(":nama_jenis", $this->nama_jenis);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_jenis_soal=:id_jenis_soal";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_jenis_soal", $this->id_jenis_soal);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function readALL(){
        $query = "SELECT * FROM jenis_soal";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>