<?php
session_start();

// Vérification de la connexion de l'utilisateur
class ProfilePage
{
    private $conn;
    private $utilisateurId;
    private $nom;
    private $prenom;
    private $grade;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->utilisateurId = $_SESSION['utilisateurId'];
        $this->fetchUserInfo();
    }

    private function fetchUserInfo()
    {
        // Récupération des informations de l'utilisateur depuis la base de données
        $sql = "SELECT nom, prenom, grade FROM utilisateurs WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $this->utilisateurId);
        $stmt->execute();
        $result = $stmt->get_result();

        // Vérification des résultats
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->nom = $row['nom'];
            $this->prenom = $row['prenom'];
            $this->grade = $row['grade'];
        } else {
            // Gérer le cas où aucun utilisateur correspondant n'est trouvé dans la base de données
            $this->nom = '';
            $this->prenom = '';
            $this->grade = 0;
        }

        // Fermeture de la requête et de la connexion à la base de données
        $stmt->close();
    }

    public function afficherPage()
    {
        ob_start();
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Profil</title>
        </head>
        <body>
            <h1>Profil</h1>
            <p>Bonjour <?php echo $this->prenom . ', ' . $this->nom; ?></p>
            <p>Vous êtes <?php
            if($this->grade==0){
                echo "Un utilisateur classique";
            }else if($this->grade==1){
                echo "Un utilisateur administrateur";
            }
            ?></p>

            <!-- Autres informations du profil à afficher -->
        </body>
        </html>

        <?php
        $content = ob_get_clean();
        require 'template.php';
    }
}

$profilePage = new ProfilePage($conn); // Assurez-vous de passer votre connexion à la base de données lors de l'instanciation
$profilePage->afficherPage();
?>
