<?php

class Database {

    private ?PDO $conn = null;

    public function connection(string $database): void
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO(
                "mysql:host=$servername;dbname=$database",
                $username,
                $password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br>";

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection(): ?PDO
    {
        return $this->conn;
    }

    public function __destruct()
    {
        // closing DB connection
        $this->conn = null;
        echo "<br>Connection closed by destructor";
    }
}

$conn = new Database();
$conn->connection("test");

/* script ends here → destructor runs automatically */
