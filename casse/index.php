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

<p class="d-flex justify-content-center display-4"><u>Nos services</u></p>

        <div class="mb-3 ms-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/images/carrosserie.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8 ps-3">
      <div class="card-body">
        <h5 class="card-title">Carrosserie</h5>
        <p class="card-text">Venez trouver votre bonheur parmis nos multiples références !</p>
      </div>
    </div>
  </div>
</div>

<div class="d-fex">
  <div class="d-flex justify-content-end">
<div class="mb-3 me-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/images/mecanique.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8 ps-3">
      <div class="card-body">
        <h5 class="card-title">Mécanique</h5>
        <p class="card-text">Nous proposons un service d'entretiens de votre véhicule.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>

<div class="mb-3 ms-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/images/electricite.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8  ps-3">
      <div class="card-body">
        <h5 class="card-title">Électronique</h5>
        <p class="card-text">Nous proposons une révision de l'éléctronique de votre véhicule.</p>
      </div>
    </div>
  </div>
</div>


<div class="d-fex">
  <div class="d-flex justify-content-end">
<div class="mb-3 me-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/images/vidange.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8 ps-3">
      <div class="card-body">
        <h5 class="card-title">Vidange</h5>
        <p class="card-text">Nous vous proposons un service de vidange.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
        
</body>


</html>

<?php $content = ob_get_clean();
require 'template.php' ?>