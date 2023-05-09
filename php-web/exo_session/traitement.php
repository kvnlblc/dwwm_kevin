<?php ob_start() ?>
<?php session_start() ?>
<h1 class="container mb-5 mt-5">Ma page traitement</h1>


<nav>
    <div class="d-flex col-12">
        <div class="card text-white mb-3" style="max-width: 10rem;">
            <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="index.php" class="btn btn-primary active">Home</a>
                    <a href="debug.php" class="btn btn-light">Débogage</a>
                    <a href="concatenation.php" class="btn btn-light">Concaténation</a>
                    <a href="boucle.php" class="btn btn-light">Boucle</a>
                    <a href="fonction.php" class="btn btn-light">Fonction</a>
                    <a href="delete.php" class="btn btn-light">Supprimer</a>
                </div>
            </div>
        </div>

</nav>
<div class="container">
    <?php
    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['taille']) && isset($_POST['sexe'])) {

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $taille = $_POST['taille'];
        $sexe = $_POST['sexe'];

        //Création des variables de session
        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['age'] = $age;
        $_SESSION['taille'] = $taille;
        $_SESSION['sexe'] = $sexe;

    }

    ?>
    <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  Données sauvegardées
</div>
</div>



<?php
$content = ob_get_clean();
require "template.php";
?>