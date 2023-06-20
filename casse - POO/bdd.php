<?php

class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";
        } catch (PDOException $e) {
            die("Échec de la connexion : " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "dkcasse"; // Nom de la base de données

$database = new Database($servername, $username, $password, $dbname);
$conn = $database->getConnection();

// Utilisez $conn pour vos opérations de base de données

?>
