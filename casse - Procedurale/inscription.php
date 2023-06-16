<?php ob_start() ?>
<?php session_start() ?>

<?php
// Vérification si le formulaire d'inscription a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $grade = 0; // Définition du grade par défaut à 0
    
    // Validation des données (à adapter selon votre logique de validation)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Inclure le fichier de connexion à la base de données
        include('bdd.php');
        
        // Hashage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Requête d'insertion pour ajouter l'utilisateur à la base de données
        $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, grade) VALUES ('$nom', '$prenom', '$email', '$hashedPassword', '$grade')";
        
        if ($conn->query($sql) === true) {
            // Redirection vers une page de succès ou de connexion
            header("Location: connexion.php");
            exit;
        } else {
            echo "Erreur lors de l'inscription : " . $conn->error;
        }
        
        // Fermeture de la connexion à la base de données
        $conn->close();
    } else {
        echo "Adresse e-mail invalide";
    }
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
