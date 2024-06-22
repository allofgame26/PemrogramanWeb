<?php
    class User {
        private $conn;
        private $table_name = "m_user";
        public $id;
        public $username;
        public $level;
        public $password;
        public $salt;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function findUserByEmail() {
            $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":username", $this->username);
            $stmt->execute();
            return $stmt;
        }
    }

    class UserManager {
        private $conn;
        private $table_name = "kategori";
        public $id_kategori;
        public $nama_kategori;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET nama_kategori=:nama_kategori";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nama_kategori", $this->nama_kategori);

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
        $query = "UPDATE " . $this->table_name . " SET nama_kategori=:nama_kategori WHERE id_kategori=:id_kategori";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_kategori", $this->id_kategori);
        $stmt->bindParam(":nama_kategori", $this->nama_kategori);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_kategori=:id_kategori";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_kategori", $this->id_kategori);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function readALL(){
        $query = "SELECT * FROM kategori";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>