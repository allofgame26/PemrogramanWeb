<?php
    class UserManager {
        private $conn;
        private $table_name = "survey_soal";
        public $id_soal;
        public $id_kategori;
        public $id_jenis_soal;
        public $soal;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_kategori=:id_kategori, id_jenis_soal=:id_jenis_soal, soal=:soal";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_kategori", $this->id_kategori);
            $stmt->bindParam(":id_jenis_soal", $this->id_jenis_soal);
            $stmt->bindParam(":soal", $this->soal);

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
        $query = "UPDATE " . $this->table_name . " SET id_kategori=:id_kategori,id_jenis_soal=:id_jenis_soal, soal=:soal WHERE id_soal=:id_soal";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_soal", $this->id_soal);
        $stmt->bindParam(":id_kategori", $this->id_kategori);
        $stmt->bindParam(":id_jenis_soal", $this->id_jenis_soal);
        $stmt->bindParam(":soal", $this->soal);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_soal=:id_soal";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_soal", $this->id_soal);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function readALL(){
        $query = "SELECT * FROM survey_soal inner join kategori on survey_soal.id_kategori = kategori.id_kategori inner join jenis_soal on survey_soal.id_jenis_soal = jenis_soal.id_jenis_soal";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readKategori(){
        $query = "SELECT * FROM kategori";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readJenissoal(){
        $query = "SELECT * FROM jenis_soal";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>