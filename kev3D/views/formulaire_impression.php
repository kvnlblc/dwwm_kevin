<?php ob_start(); ?>

<?php
// Fichier : formulaire.php

require_once './models/FormImpression3D.php';

$formulaire = new FormImpression3D();

// Afficher le formulaire
$formulaire->afficherFormulaire();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traiter le formulaire
    $formulaire->traiterFormulaire();
}


?>



<?php $content = ob_get_clean();
require 'template.php' ?>