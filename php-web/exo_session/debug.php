<?php ob_start() ?>
<?php
session_start(); ?>

<nav>
    <div class="d-flex col-12">
        <div class="card text-white mb-3" style="max-width: 10rem;">
            <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="index.php" class="btn btn-light">Home</a>
                    <a href="debug.php" class="btn btn-primary active">Débogage</a>
                    <a href="concatenation.php" class="btn btn-light">Concaténation</a>
                    <a href="boucle.php" class="btn btn-light">Boucle</a>
                    <a href="fonction.php" class="btn btn-light">Fonction</a>
                    <a href="delete.php" class="btn btn-light">Supprimer</a>
                </div>
            </div>
        </div>

</nav>

<div class="col-12 d-flex flex-column justify-content-center">
    <div class="text-center">
        <h2>Débogage</h2>
    </div>
    <div class="text-center">
        <h3>===> Lecture du tableau à l'aide de la fonction print_r()</h3>
    </div>
    <div class="d-flex justify-content-center">
        <pre>
            <?php print_r($_SESSION); ?>
        </pre>
    </div>
</div>





<?php
$content = ob_get_clean();
require "template.php";

?>