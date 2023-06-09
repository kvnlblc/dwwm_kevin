<?php ob_start() ?>
<body>
    

      <div class="header text-center position-relative">
            <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5)"></div>
            <img src="images/banner.jpg">
            <div class="titre header_texte position-absolute top-50 start-50 translate-middle">
                <h1 class="bienvenue display-2 fw-bold">Bienvenue sur DK-CASSE</h1>
                <p class="descbienvenue fs-3 fw-bold">Pièces d'occasion et pièce neuf</p>
            </div>
        </div>

<h2 class="text-center fw-bold"><u>Nos Services</u></h2>

        <div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <img src="/images/carrosserie.jpg" class="card-img-top" alt="Pièce Carrosserie">
        <div class="card-body">
          <h5 class="card-title">Pièce Carrosserie</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces de carrosserie.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card">
        <img src="/images/mecanique.jpg" class="card-img-top" alt="Pièce Mécanique">
        <div class="card-body">
          <h5 class="card-title">Pièce Mécanique</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces mécanique.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card">
        <img src="/images/electronique.jpg" class="card-img-top" alt="Pièce Électronique">
        <div class="card-body">
          <h5 class="card-title">Pièce Électronique</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces électronique.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="card">
        <img src="/images/vidange.jpg" class="card-img-top" alt="Pièce Vidange">
        <div class="card-body">
          <h5 class="card-title">Pièce Vidange</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces pour votre vidange.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>
  </div>
</div>
        
</body>


</html>

<?php $content = ob_get_clean();
require 'template.php' ?>