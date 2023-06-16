<?php ob_start() ?>
<?php session_start(); ?>
<?php


// Vérification si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Inclure le fichier de connexion à la base de données
    include('bdd.php');

    // Requête pour récupérer l'utilisateur correspondant à l'adresse e-mail
    $sql = "SELECT * FROM utilisateurs WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
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

    // Fermeture de la connexion à la base de données
    $stmt->close();
    $conn->close();
}
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

<?php $content = ob_get_clean();
require 'template.php' ?>
