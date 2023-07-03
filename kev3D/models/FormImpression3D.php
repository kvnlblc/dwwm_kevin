<?php


class FormImpression3D {
    public function __construct() {}

    public function afficherFormulaire() {
        ?>
        <div class="container">
        <h1 class="mt-4">Formulaire d'impression 3D</h1>

        <form method="post" action="views/traitement_formulaire.php">
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group mt-3">
                <label for="type_impression">Type d'impression 3D :</label>
                <select class="form-control" id="type_impression" name="type_impression" required>
                    <option value="figurine">Figurine</option>
                    <option value="porte-clefs">Porte-clés</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="description">Description détaillée :</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
    </div>
        <?php
    }

    public function traiterFormulaire() {
        // Récupérer les données soumises dans $_POST
        $email = $_POST['email'];
        $typeImpression = $_POST['type_impression'];
        $description = $_POST['description'];

        // Traiter les données comme vous le souhaitez (par exemple, enregistrer dans une base de données, envoyer un e-mail, etc.)

        // Rediriger l'utilisateur vers une autre page après le traitement du formulaire
        header("Location: views/confirmation.php");
        exit();
    }
}


?>