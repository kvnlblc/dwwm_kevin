<?php ob_start() ?>
<?php session_start(); ?>

<?php

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: connexion.php");
    exit;
}

// Inclure le fichier de connexion à la base de données
include('bdd.php');

// Récupérer l'identifiant de l'utilisateur depuis la session
$utilisateurId = $_SESSION['utilisateurId'];

// Requête pour récupérer les informations de l'utilisateur depuis la base de données
$sql = "SELECT nom, prenom, grade FROM utilisateurs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $utilisateurId);
$stmt->execute();
$result = $stmt->get_result();

// Vérifier si des résultats sont retournés
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $grade = $row['grade'];
} else {
    // Gérer le cas où aucun utilisateur correspondant n'est trouvé dans la base de données
    $nom = '';
    $prenom = '';
    $grade = 0;
}

// Fermeture de la connexion à la base de données
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <p>Bonjour <?php echo $prenom . ', ' . $nom; ?></p>
    <p>Vous êtes <?php
    if($grade==0){
        echo "Un utilisateur classique";
    }else if($grade==1){
        echo "Un utilisateur administrateur";
    }
        ?></p>
    
    <!-- Autres informations du profil à afficher -->
</body>
</html>





<?php $content = ob_get_clean();
require 'template.php' ?>