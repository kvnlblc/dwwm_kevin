<?php ob_start(); ?>

<div class="container">
        <h1 class="mt-4">Connexion</h1>

        <form method="post" action="traitement_connexion.php">
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>

<?php $content = ob_get_clean();
require 'template.php' ?>