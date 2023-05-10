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

<section>
  <h2 class="d-flex justify-content-center">Ajouter des données</h2>
  <form class="container mt-5 perso" action="traitement.php" method="POST">
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Prénom" name="prenom">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age (18 à 70 ans)</label>
      <input type="number" class="form-control" placeholder="Renseignez votre age" name="age">
    </div>
    <div class="mb-3">
      <label for="taille" class="form-label">Taille :</label>
      <div class="mb-3 input-group"><span class="input-group-text">Taille (1,26m à 3m)</span><input type="number" aria-label="First name" class="form-control" step="0.01" name="taille"><span class="input-group-text">m</span></div>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="femme">
      <label class="form-check-label" for="sexe">
        Femme
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="homme">
      <label class="form-check-label" for="sexe">
        Homme
      </label>
    </div>

    <input class="mt-4 btn btn-primary" type="submit" value="Enregistrer les données">
  </form>
</section>




<?php
$content = ob_get_clean();
require "template.php";

?>