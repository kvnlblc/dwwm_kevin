<?php ob_start() ?>

<div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h1>Panel de connexion</h1>
            <form action="traitement.php" method="POST">
                <div class="mb-3">
                    <label for="mail" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="mail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" value="connexion" class="btn btn-primary">Connexion</button>
            </form>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "template.php";
?>