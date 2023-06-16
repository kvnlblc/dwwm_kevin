<?php ob_start() ?>
<?php session_start() ?>

<title>DK-CASSE | Pièce Carrosserie</title>

<body>
    <div class="container mt-5 mb-3">
        <h1 class="mt-5">Pièces de carrosserie</h1>

        <p>Nous proposons un large choix de pièces de carrosserie pour différents modèles et marques de véhicules. Que
            vous ayez besoin de remplacer une porte, un capot, un pare-chocs ou tout autre élément de carrosserie, nous
            avons ce qu'il vous faut.</p>
            
        <div class="border border-dark w-25 bg-white">
            <div class="container mt-5 mb-3">
                <h2>Sélectionnez une marque de véhicule :</h2>
                <select class="form-select border-dark " aria-label="Type de véhicule">
                    <option selected disabled>Choisissez un type de véhicule</option>
                    <option value="audi">Audi</option>
                    <option value="bmw">BMW</option>
                    <option value="chevrolet">Chevrolet</option>
                    <option value="ford">Ford</option>
                    <option value="honda">Honda</option>
                    <option value="hyundai">Hyundai</option>
                    <option value="mercedes-benz">Mercedes-Benz</option>
                    <option value="nissan">Nissan</option>
                    <option value="toyota">Toyota</option>
                    <option value="volkswagen">Volkswagen</option>
                </select>
            </div>

            <div class="container mt-5 mb-3">
                <h2>Sélectionnez la pièce rechercher :</h2>
                <select class="form-select border-dark" aria-label="Type de véhicule">
                    <option selected disabled>Choisissez un type de véhicule</option>
                    <option value="aile">Aile avant</option>
                    <option value="capot">Capot</option>
                    <option value="hayon">Hayon</option>
                    <option value="pare-brise">Pare-brise</option>
                    <option value="pare-chocs">Pare-Chocs</option>
                    <option value="porte">Porte</option>
                    <option value="retroviseur">Rétroviseur</option>
                    <option value="toit">Toit</option>
                    <option value="trappe_a_carburant">Trappe à Carburant</option>
                    <option value="vitre_laterale">Vitre latérale</option>
                </select>
                <button class="btn btn-primary mt-5 mb-3" type="button">Rechercher</button>
            </div>
        </div>
    </div>

</body>

<?php $content = ob_get_clean();
require 'template.php' ?>