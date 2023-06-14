<?php ob_start() ?>

<title>DK-CASSE | Pièce Électrique</title>

<body>
  <div class="container">
    <h1 class="mt-5">Pièces électriques</h1>

    <p>Nous proposons une variété de pièces électriques de haute qualité pour différents types de véhicules. Que vous ayez besoin de remplacer un faisceau de câblage, une batterie, des phares ou tout autre composant électrique, nous avons ce qu'il vous faut.</p>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece1.jpg" class="card-img-top" alt="Pièce 1">
          <div class="card-body">
            <h5 class="card-title">Batterie</h5>
            <p class="card-text">Description de la pièce...</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece2.jpg" class="card-img-top" alt="Pièce 2">
          <div class="card-body">
            <h5 class="card-title">Phares avant</h5>
            <p class="card-text">Description de la pièce...</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece3.jpg" class="card-img-top" alt="Pièce 3">
          <div class="card-body">
            <h5 class="card-title">Démarreur</h5>
            <p class="card-text">Description de la pièce...</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>

<?php $content = ob_get_clean();
require 'template.php' ?>