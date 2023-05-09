<?php ob_start() ?>
<?php
session_start(); ?>

<nav>
    <div class="d-flex col-12">
        <div class="card text-white mb-3" style="max-width: 10rem;">
            <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="index.php" class="btn btn-light">Home</a>
                    <a href="debug.php" class="btn btn-light">Débogage</a>
                    <a href="concatenation.php" class="btn btn-light">Concaténation</a>
                    <a href="boucle.php" class="btn btn-light">Boucle</a>
                    <a href="fonction.php" class="btn btn-primary active">Fonction</a>
                    <a href="delete.php" class="btn btn-light">Supprimer</a>
                </div>
            </div>
        </div>
</nav>

<div class="col-12 d-flex flex-column justify-content-center">
    <div class="text-center">
        <h2>Concaténation</h2>
    </div>
    <div class="text-center">
        <h3>===> J'utilise ma fonction readTable()</h3>
<?php



?></div>
<div class="d-flex justify-content-center">
<?php require "function.php";
readtable($compteur); ?>
</div><br>



<?php
$content = ob_get_clean();
require "template.php";

?>