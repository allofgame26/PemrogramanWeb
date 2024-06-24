<?php
    class UserManager {
        private $conn;
        private $table_name = "ortu";
        public $id_ortu;
        public $id_pengguna;
        public $penghasilan;
 
        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_pengguna=:id_pengguna, penghasilan=:penghasilan";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_pengguna", $this->id_pengguna);
            $stmt->bindParam(":penghasilan", $this->penghasilan);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET id_pengguna=:id_pengguna, penghasilan=:penghasilan WHERE id_ortu=:id_ortu";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id_ortu", $this->id_ortu);
        $stmt->bindParam(":id_pengguna", $this->id_pengguna);
        $stmt->bindParam(":penghasilan", $this->penghasilan);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_ortu=:id_ortu";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_ortu", $this->id_ortu);

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
        $query = "SELECT * FROM pengguna inner join stakeholder on pengguna.id_stakeholder = stakeholder.id_stakeholder inner join biodata on pengguna.id_biodata = biodata.id_biodata where stakeholder.id_stakeholder = '6' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>