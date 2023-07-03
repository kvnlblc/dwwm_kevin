<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/views/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Kev3D</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galerie">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulaire_impression">Formulaire d'impression</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mon compte
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Connexion</a></li>
              <li><a class="dropdown-item" href="#">Inscription</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?= $content ?>

  <footer class="footer bg-dark text-light pb-5 pt-5">
    <div class="container text-center">
      <span>&copy; 2023 Kev3D. Tous droits réservés.</span>
    </div>
  </footer>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
