<?php
    class User {
        private $conn;
        private $table_name = "biodata";
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
        private $table_name = "biodata";
        public $id_biodata;
        public $nama;
        public $tanggal_lahir;
        public $tempat_lahir;
        public $alamat;
        public $email;
        public $telp;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, tanggal_lahir=:tanggal_lahir, tempat_lahir=:tempat_lahir, alamat=:alamat, email=:email, telp=:telp";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":tanggal_lahir", $this->tanggal_lahir);
            $stmt->bindParam(":tempat_lahir", $this->tempat_lahir);
            $stmt->bindParam(":alamat", $this->alamat);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":telp", $this->telp);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama,tanggal_lahir=:tanggal_lahir, tempat_lahir=:tempat_lahir, alamat=:alamat, email=:email, telp=:telp  WHERE id_biodata=:id_biodata";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id_biodata", $this->id_biodata);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":tanggal_lahir", $this->tanggal_lahir);
        $stmt->bindParam(":tempat_lahir", $this->tempat_lahir);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telp", $this->telp);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_biodata=:id_biodata";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_biodata", $this->id_biodata);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}
?>