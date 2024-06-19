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
        private $table_name = "m_user";
        public $id;
        public $username;
        public $level;
        public $password;
        public $salt;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET username=:username, level=:level, password=:password, salt=:salt";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":level", $this->level);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":salt", $this->salt);

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
    public function updateakun() {
        $query = "UPDATE " . $this->table_name . " SET username=:username, level=:level, password=:password  WHERE user_id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":level", $this->level);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":salt", $this->salt);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete User
    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE user_id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>