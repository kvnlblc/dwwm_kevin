<?php ob_start() ?>

<title>DK-CASSE | Pièce Vidange</title>

<body>
  <div class="container">
    <h1 class="mt-5">Pièces de vidange</h1>

    <p>Nous proposons une gamme complète de pièces de vidange de haute qualité pour l'entretien de votre véhicule. Que vous ayez besoin de filtres à huile, de joints, de bouchons de vidange ou tout autre composant lié à la vidange, nous avons ce qu'il vous faut.</p>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece1.jpg" class="card-img-top" alt="Pièce 1">
          <div class="card-body">
            <h5 class="card-title">Filtre à huile</h5>
            <p class="card-text">Description de la pièce...</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece2.jpg" class="card-img-top" alt="Pièce 2">
          <div class="card-body">
            <h5 class="card-title">Joint de carter d'huile</h5>
            <p class="card-text">Description de la pièce...</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="piece3.jpg" class="card-img-top" alt="Pièce 3">
          <div class="card-body">
            <h5 class="card-title">Bouchon de vidange</h5>
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