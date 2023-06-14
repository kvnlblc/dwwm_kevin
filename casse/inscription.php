<?php ob_start() ?>

<title>DK-CASSE | Inscription</title>

<body>
  <div class="container">
    <h1 class="mt-5">Inscription</h1>


    <div class="border rounded border-dark" style="background-color: #f5f5f5; padding: 30px">
    <form>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control border border-dark" id="nom" name="nom" required>
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control border border-dark" id="prenom" name="prenom" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control border border-dark" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control border border-dark" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
  </div>
</div>

</body>


<?php $content = ob_get_clean();
require 'template.php' ?>