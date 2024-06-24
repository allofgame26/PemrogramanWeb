<?php
    class UserManager {
        private $conn;
        private $table_name = "alumni";
        public $id_alumni;
        public $id_pengguna;
        public $nim;
        public $jurusan;
        public $prodi;
        public $tahun;
        public $tahun_masuk;
 
        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_pengguna=:id_pengguna, nim=:nim, jurusan=:jurusan, prodi=:prodi, tahun_lulus=:tahun, tahun_masuk=:tahun_masuk";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_pengguna", $this->id_pengguna);
            $stmt->bindParam(":nim", $this->nim);
            $stmt->bindParam(":jurusan", $this->jurusan);
            $stmt->bindParam(":prodi", $this->prodi);
            $stmt->bindParam(":tahun", $this->tahun);
            $stmt->bindParam(":tahun_masuk", $this->tahun_masuk);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET id_pengguna=:id_pengguna, nim=:nim, jurusan=:jurusan, prodi=:prodi, tahun_lulus=:tahun, tahun_masuk=:tahun_masuk  WHERE id_alumni=:id_alumni";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id_alumni", $this->id_alumni);
        $stmt->bindParam(":id_pengguna", $this->id_pengguna);
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":prodi", $this->prodi);
        $stmt->bindParam(":tahun", $this->tahun);
        $stmt->bindParam(":tahun_masuk", $this->tahun_masuk);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_alumni=:id_alumni";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_alumni", $this->id_alumni);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name ;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readPengguna() {
        $query = "SELECT * FROM pengguna inner join stakeholder on pengguna.id_stakeholder = stakeholder.id_stakeholder inner join biodata on pengguna.id_biodata = biodata.id_biodata where stakeholder.id_stakeholder = '3' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>