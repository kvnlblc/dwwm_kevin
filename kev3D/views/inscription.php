<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
<div class="container">
        <h1 class="mt-5">Inscription</h1>
        <form action="traitement_inscription.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">2
                <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse de livraison :</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</body>
</html>


<?php $content = ob_get_clean();
require 'template.php' ?>