<?php ob_start() ?>
<?php session_start() ?>

<nav>
<div class="card text-white mb-3" style="max-width: 10rem;">
        <div class="card-body">
            <div class="btn-group-vertical">
                <a href="index.php" class="btn btn-primary active">Home</a>
            </div>
        </div>
    </div>
</nav>

<div class="btn-group-vertical">
<a href="formulaire.php" class="btn btn-primary active">Ajouter des données</a></div>




<?php
$content = ob_get_clean();
require "template.php";

?>