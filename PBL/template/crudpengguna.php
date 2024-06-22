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
        private $table_name = "pengguna";
        public $id_pengguna;
        public $id_stakeholder;
        public $id_biodata;
        public $username;
        public $level;
        public $password;
        public $salt;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_biodata=:id_biodata, id_stakeholder=:id_stakeholder";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_biodata", $this->id_biodata);
            $stmt->bindParam(":id_stakeholder", $this->id_stakeholder);

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
        $query = "UPDATE " . $this->table_name . " SET id_biodata=:id_biodata,id_stakeholder=:id_stakeholder WHERE id_pengguna=:id_pengguna";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_pengguna", $this->id_pengguna);
        $stmt->bindParam(":id_biodata", $this->id_biodata);
        $stmt->bindParam(":id_stakeholder", $this->id_stakeholder);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_pengguna=:id_pengguna";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_pengguna", $this->id_pengguna);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function readALL(){
        $query = "SELECT pengguna.id_pengguna, biodata.id_biodata, biodata.nama, stakeholder.id_stakeholder , stakeholder.nama_stakeholder FROM pengguna inner join biodata on pengguna.id_biodata = biodata.id_biodata inner join stakeholder on pengguna.id_stakeholder = stakeholder.id_stakeholder";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readBiodata(){
        $query = "SELECT * FROM biodata";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readStakeholder(){
        $query = "SELECT * FROM stakeholder";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>