<?php
    class UserManager {
        private $conn;
        private $table_name = "mitra";
        public $id_mitra;
        public $id_pengguna;
        public $nama_perusahaan;
        public $jabatan;
        public $kota;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_pengguna=:id_pengguna,nama_perusahaan=:nama_perusahaan, jabatan=:jabatan, kota=:kota";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_pengguna", $this->id_pengguna);
            $stmt->bindParam(":nama_perusahaan", $this->nama_perusahaan);
            $stmt->bindParam(":jabatan", $this->jabatan);
            $stmt->bindParam(":kota", $this->kota);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET id_pengguna=:id_pengguna,nama_perusahaan=:nama_perusahaan, jabatan=:jabatan, kota=:kota  WHERE id_mitra=:id_mitra";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id_pengguna",$this->id_pengguna);
        $stmt->bindParam(":nama_perusahaan", $this->nama_perusahaan);
        $stmt->bindParam(":jabatan", $this->jabatan);
        $stmt->bindParam(":kota", $this->kota);
        $stmt->bindParam(":id_mitra", $this->id_mitra);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_mitra=:id_mitra";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_mitra", $this->id_mitra);

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

    public function readPengguna() {
        $query = "SELECT * FROM pengguna inner join stakeholder on pengguna.id_stakeholder = stakeholder.id_stakeholder inner join biodata on pengguna.id_biodata = biodata.id_biodata where stakeholder.id_stakeholder = '4' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>