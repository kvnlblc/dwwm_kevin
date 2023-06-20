<?php
session_start();

class Inscription
{
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $grade;
    private $conn;

    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->grade = 0;
        $this->conn = null;
    }

    public function validerInscription()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            include('bdd.php');

            $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, grade) VALUES (:nom, :prenom, :email, :mot_de_passe, :grade)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nom', $this->nom);
            $stmt->bindParam(':prenom', $this->prenom);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':mot_de_passe', $hashedPassword);
            $stmt->bindParam(':grade', $this->grade);

            if ($stmt->execute()) {
                header("Location: connexion.php");
                exit;
            } else {
                echo "Erreur lors de l'inscription : " . $stmt->errorInfo()[2];
            }

            $this->conn = null;
        } else {
            echo "Adresse e-mail invalide";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $inscription = new Inscription($nom, $prenom, $email, $password);
    $inscription->validerInscription();
}
?>

<title>DK-CASSE | Inscription</title>

<body>
    <div class="d-flex align-items-center flex-column">
        <h1 class="mt-5">Inscription</h1>


        <div class="card mt-5 mb-3" style="width: 18rem;">
            <div class="card-body">
                <form method="POST" action="inscription.php">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control border border-dark" id="nom" name="nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control border border-dark" id="prenom" name="prenom" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control border border-dark" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control border border-dark" id="password" name="password"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 mb-3">S'inscrire</button>
                    <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous</a></p>
                </form>
            </div>
        </div>
    </div>

</body>


<?php $content = ob_get_clean();
require 'template.php' ?>
