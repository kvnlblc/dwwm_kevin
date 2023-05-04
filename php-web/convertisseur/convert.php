<? ob_start() ?>

<div class="d-flex justify-content-center">
    <div class="d-flex card border-light text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Convertisseur Romain</div>
        <div class="card-body">
            <form class="container mt-5" action="traitement.php" method="POST">
                <label foor="nombre">Nombre :</label>
                <input type="number" class="form-control" placeholder="Entrer un nombre entre 1 et 3999" id="nombre" name="nombre">
                <input class="mt-4" type="submit" value="Convertir">
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>