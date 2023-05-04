<?php ob_start() ?>

<div class="d-flex justify-content-center">
    <div class="card border-light text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Convertisseur Romain</div>
        <div class="card-body">
            <h4 class="card-title">Accéder au convertisseur</h4>
            <p class="card-text">Essayer notre convertisseur gratuitement !</p>
            <button class="btn btn-primary"><a href="convert.php"
                    class="text-white text-decoration-none">Convertir</a></button>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>