<?php
require_once __DIR__ . "/../models/FormulaireManager.php";

// Récupération des valeurs du formulaire
$email = $_POST['email'];
$typeImpression = $_POST['type_impression'];
$description = $_POST['description'];

// Création d'une instance de FormulaireManager
$formulaireManager = new FormulaireManager();

// Enregistrement des données du formulaire
if ($formulaireManager->enregistrerDonnees($email, $typeImpression, $description)) {
    ob_start();
    ?>

    <body>
        <div class='container'>
            <h1>Confirmation d'impression 3D</h1>
            <p>Merci pour votre demande d'impression 3D. Votre demande a bien été prise en compte.</p>
            <p>Nous vous contacterons prochainement à l'adresse e-mail que vous avez fournie : <?php echo $_POST['email']; ?></p>
            <p>Type d'impression 3D demandé : <?php echo $_POST['type_impression']; ?></p>
            <p>Description détaillée : <?php echo $_POST['description']; ?></p>
        </div>
    </body>
    </html>

    <?php
    $content = ob_get_clean();
    require 'template.php';
} else {
    $error = "Une erreur est survenue lors de l'enregistrement des données.";
    $content = "";
    require 'template.php';
}
?>
