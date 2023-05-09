<?php ob_start() ?>

<section class="d-flex flex-column mt-5">
    <div class="text-center align-item-center">
    </div>
    <div class="d-flex align-item-center justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="card mt-5 ms-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Convertisseur Romain</h5>
                    <p class="card-text">Ici vous avez le convertisseur Romain</p>
                    <a href="/convertisseur" class="btn btn-primary">Allez au convertisseur</a>
                </div>
            </div>
            <div class="card mt-5 ms-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Page de connexion</h5>
                    <p class="card-text">Ici vous avez une page de connexion</p>
                    <a href="login-panel" class="btn btn-primary">Allez à la page de connexion</a>
                </div>
            </div>
            <div class="card mt-5 ms-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Exercice Session</h5>
                    <p class="card-text">Ici vous avez l'exercice de session</p>
                    <a href="exo_session" class="btn btn-primary">Allez à l'exercice</a>
                </div>
            </div>
            <div class="card mt-5 ms-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">En cours</h5>
                    <p class="card-text">En cours</p>
                    <a href="#" class="btn btn-primary">X</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "template.php";
?>