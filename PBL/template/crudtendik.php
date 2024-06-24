<?php
    class UserManager {
        private $conn;
        private $table_name = "tendik";
        public $id_tendik;
        public $id_pengguna;
        public $nopeg;
 
        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET id_pengguna=:id_pengguna, nopeg=:nopeg";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id_pengguna", $this->id_pengguna);
            $stmt->bindParam(":nopeg", $this->nopeg);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Update User
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET id_pengguna=:id_pengguna, nopeg=:nopeg WHERE id_tendik=:id_tendik";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id_tendik", $this->id_tendik);
        $stmt->bindParam(":id_pengguna", $this->id_pengguna);
        $stmt->bindParam(":nopeg", $this->nopeg);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_tendik=:id_tendik";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_tendik", $this->id_tendik);

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
        $query = "SELECT * FROM pengguna inner join stakeholder on pengguna.id_stakeholder = stakeholder.id_stakeholder inner join biodata on pengguna.id_biodata = biodata.id_biodata where stakeholder.id_stakeholder = '2' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>