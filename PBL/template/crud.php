<?php
    class User {
        private $conn;
        private $table_name = "m_user";

        public $id;
        public $username;
        public $level;
        public $password;

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

        public function __construct($db) {
            $this->conn = $db;
        }

        // Create User
        public function create($user) {
            $query = "INSERT INTO " . $this->table_name . " SET username=:username, level=:level, password=:password";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":username", $user->username);
            $stmt->bindParam(":level", $user->level);
            $stmt->bindParam(":password", password_hash($user->password, PASSWORD_BCRYPT));

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
    public function update($user) {
        $query = "UPDATE " . $this->table_name . " SET username=:username  WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":username", $user->username);
        $stmt->bindParam(":id", $user->id);

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