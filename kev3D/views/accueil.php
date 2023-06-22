<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Kev3D</title>
</head>
<body>
  
<div class="welcome-block">
    <div class="container">
      <h1>Bienvenue sur Kev3D</h1>
      <p>Nous proposons des impressions 3D personnalisé.</p>
    </div>
  </div>

  <div class="services-block">
    <div class="container">
      <h2>Nos services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="/public/images/stitch.jpg" class="card-img-top" alt="Stitch">
            <div class="card-body">
              <h5 class="card-title">Stitch</h5>
              <p class="card-text">Nous avons des modèles Stitch disponible ou sur demande. Pour voir les modèles disponible, dirigez vous dans notre <a href="galerie.php">Galerie</a>.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/public/images/pikachu.jpg" class="card-img-top" alt="Pikachu">
            <div class="card-body">
              <h5 class="card-title">Pikachu</h5>
              <p class="card-text">Nous avons des modèles Pikachu disponible ou sur demande. Pour voir les modèles disponible, dirigez vous dans notre <a href="galerie.php">Galerie</a>.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/public/images/perso.jpg" class="card-img-top" alt="Personnaliser">
            <div class="card-body">
              <h5 class="card-title">Impression Personnaliser</h5>
              <p class="card-text">Vous souhaitez avoir une impression personnalisée ? C'est possible ! Utilisez notre formulaire de demande d'impression.</p>
            </div>
          </div>
        </div>
        <p class="text-center pt-5 pb-5 fs-5">Nous avons d'autres modèles déjà existant ! Nous vous invitons à allez voir notre <a href="galerie.php">Galerie</a> !</p>
      </div>
    </div>
  </div>

  <div class="about-block">
    <div class="container">
      <h2>À propos</h2>
      <p class="text-center pt-5 pb-5 fs-5">Je suis un passionné de l'impression 3D et je me lance dans la création d'impressions 3D personnalisées. J'adore explorer les possibilités infinies de la technologie de l'impression 3D et créer des objets uniques selon les besoins et les souhaits de mes clients. Mon objectif est de fournir des impressions 3D de haute qualité, alliant précision, durabilité et esthétique.</p>
    </div>
  </div>

</body>
</html>


<?php $content = ob_get_clean();
require 'template.php' ?>