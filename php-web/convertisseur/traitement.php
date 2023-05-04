<? ob_start() ?>

<?php
$num =1-3999;
$num = $_POST["nombre"];


require "fonction.php";

?>
<div class="d-flex justify-content-center">
    <div class="d-flex card border-light text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Convertisseur Romain</div>
        <div class="card-body">
            <form class="container mt-5" action="traitement.php" method="POST">
                <label foor="nombre">Nombre :</label>
                <input type="number" class="form-control" placeholder="Entrer un nombre entre 1 et 3999" id="nombre" name="nombre" min="1" max="3999">
                <input class="mt-4" type="submit" value="Convertir">
            </form>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="card border-success text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Convertisseur Romain</div>
        <div class="card-body">
            <?php if($num==false){
    echo "Merci de rentrer un chiffre.";
}else{echo "Le chiffre romain de " . $num . " est : " . convertToromain($num);} ?>
            
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>