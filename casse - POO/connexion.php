<?php

session_start();

class GestionConnexion
{
    private $conn;
    
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($this->conn->connect_error) {
            die("Échec de la connexion : " . $this->conn->connect_error);
        }
    }
    
    public function executerRequete($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        
        if ($stmt === false) {
            die("Échec de la préparation de la requête : " . $this->conn->error);
        }
        
        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result === false) {
            die("Échec de l'exécution de la requête : " . $stmt->error);
        }
        
        return $result;
    }
    
    public function fermerConnexion()
    {
        $this->conn->close();
    }
}

$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "dkcasse"; // Nom de la base de données

$bdd = new GestionConnexion($servername, $username, $password, $dbname);

// Vérification si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour récupérer l'utilisateur correspondant à l'adresse e-mail
    $sql = "SELECT * FROM utilisateurs WHERE email = ?";
    $result = $bdd->executerRequete($sql, [$email]);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Vérification du mot de passe
        if (password_verify($password, $user['mot_de_passe'])) {
            // Le mot de passe est correct, l'utilisateur est connecté
            
            // Vous pouvez stocker les informations de l'utilisateur dans une session ou des cookies
            $_SESSION['loggedIn'] = true;
            $_SESSION['grade'] = $user['grade']; // Remplacez 'grade' par le nom de la colonne correspondant au grade dans votre table utilisateurs

            $_SESSION['utilisateurId'] = $user['id']; // Enregistrement de l'identifiant de l'utilisateur
            
            // Redirection vers une page de succès ou le tableau de bord
            header("Location: index.php");
            exit;
        } else {
            // Le mot de passe est incorrect
            $error = "Mot de passe incorrect.";
        }
    } else {
        // Aucun utilisateur trouvé avec cette adresse e-mail
        $error = "Adresse e-mail incorrecte.";
    }
}

$bdd->fermerConnexion();

ob_start(); // Démarrer la temporisation de sortie

?>

<title>DK-CASSE | Connexion</title>

<body>
    <div class="wrapper" style="min-height: 100%; display: flex; flex-direction: column;">
        <div class="content" style="flex: 1;">
            <div class="d-flex align-items-center flex-column">
                <h1 class="mt-5">Connexion</h1>

                <div class="card mt-5 mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <?php
                        // Affichage des éventuelles erreurs
                        if (isset($error)) {
                            echo '<div class="alert alert-danger">' . $error . '</div>';
                        }
                        ?>

                        <form method="POST" action="connexion.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control border border-dark" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control border border-dark" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3 mb-3">Se connecter</button>
                            
                            <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php

$content = ob_get_clean(); // Récupérer le contenu de la temporisation de sortie dans la variable $content
require 'template.php'; // Inclure le fichier de template pour afficher la page

?>
