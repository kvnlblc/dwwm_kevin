<?php ob_start() ?>

<title>DK-CASSE | Connexion</title>

<body>
  <div class="container">
    <h1 class="mt-5">Connexion</h1>

    <div class="border rounded border-dark" style="background-color: #f5f5f5; padding: 30px">
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control border border-dark" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control border border-dark" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">Se connecter</button>
      <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous</a></p>
    </form>
</div>
  </div>

</body>


<?php $content = ob_get_clean();
require 'template.php' ?>