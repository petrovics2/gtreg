<?php
    class Database {
        //adatbázis adatok:
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'golyak';
        public $conn;
        //Adatbázis kapcsolat
        public function getConnection()
        {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }

            return $this->conn;
        }
    }
?>