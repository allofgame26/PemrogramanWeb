<?php
    class UserManager {
        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

    public function readALL(){
        $query = "SELECT * FROM jawaban_responden";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>