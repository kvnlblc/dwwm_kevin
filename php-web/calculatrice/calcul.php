<? ob_start() ?>


<div class="card-body">
    <h1>Calculatrice</h1>
    <form action="calcul.php" method="POST">
        <div class="mb-3">
            <label for="text">Chiffre 1</label>
            <input type="text" class="form-control" placeholder="Chiffre1" id="chiffre1" name="chiffre1">
        </div>
        <div class="mb-3">
            <label for="text">Chiffre 2</label>
            <input type="text" class="form-control" placeholder="Chiffre2" id="chiffre2" name="chiffre2">
        </div>
        <div class="mb-3">
            <label for="choix">Choix</label>
            <input type="text" class="form-control" placeholder="Faite un choix" id="choix" name="choix">
        </div>
        <button type="submit" value="calculer" class="btn btn-primary">Calculer</button>
        <?php
        ?>
    </form>
</div>


<?php
$chiffre1 = $_POST["chiffre1"];
$chiffre2 = $_POST["chiffre2"];
$operation = $_POST["choix"];
$somme=0;

switch ($operation){
    case "+":
        $somme = $nb1 + $nb2;
        echo "le resultat est : " . $somme;
        break;
    case "-":
        $somme = $nb1 - $nb2;
        echo "le resultat est : " . $somme;
        break;
    case "*":
        $somme = $nb1 * $nb2;
        echo "le resultat est : " . $somme;
        break;
    case "/":

        $somme = $nb1 / $nb2;
        echo " le resultat est : " . $somme;
        break;
    case "%":
        $somme = $nb1 % $nb2;
        echo "le resultat est : " . $somme;
        break;
    default:
        echo "Invalide";
}

?>


<?php $content = ob_get_clean();
require "template.php";
?>