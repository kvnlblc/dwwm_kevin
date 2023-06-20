<?php
session_start();

// Classe pour la gestion de la connexion à la base de données
class DatabaseConnection
{
    private $conn;
    
    public function __construct($servername, $username, $password, $dbname)
    {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Échec de la connexion : " . $e->getMessage());
        }
    }
    
    public function closeConnection()
    {
        $this->conn = null;
    }
    
    public function executeQuery($sql, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            die("Échec de l'exécution de la requête : " . $e->getMessage());
        }
    }
}

// Configuration de la connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "dkcasse"; // Nom de la base de données

// Création de l'objet de connexion à la base de données
$dbConnection = new DatabaseConnection($servername, $username, $password, $dbname);

// Supprimer la variable de session
unset($_SESSION['loggedIn']);

// Rediriger l'utilisateur vers une page appropriée (par exemple, la page d'accueil)
header("Location: index.php");
exit;

$dbConnection->closeConnection();
?>
