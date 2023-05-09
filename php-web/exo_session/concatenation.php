<?php ob_start() ?>
<?php
session_start(); ?>

<nav>
    <div class="d-flex col-12">
        <div class="card text-white mb-3" style="max-width: 10rem;">
            <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="index.php" class="btn btn-light">Home</a>
                    <a href="debug.php" class="btn btn-light">Débogage</a>
                    <a href="concatenation.php" class="btn btn-primary active">Concaténation</a>
                    <a href="boucle.php" class="btn btn-light">Boucle</a>
                    <a href="fonction.php" class="btn btn-light">Fonction</a>
                    <a href="delete.php" class="btn btn-light">Supprimer</a>
                </div>
            </div>
        </div>
</nav>

<div class="col-12 d-flex flex-column justify-content-center">
    <div class="text-center">
        <h2>Concaténation</h2>
    </div>
    <div class="text-center">
        <h3>===> Construction d'une phrase avec le contenu du tableau</h3>
        <?php $_SESSION['prenom']=ucfirst($_SESSION['prenom']); ?>
        <?php $_SESSION['nom']=ucfirst($_SESSION['nom']); ?>
        <?php
        if($_SESSION['sexe'] == "homme"){
            echo "Mr ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }else{
            echo "Mme ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }?>
    </div>

    <div class="text-center">
        <h3>===> Construction d'une phrase après MAJ du tableau</h3>
        <?php $_SESSION['nom']=strtoupper($_SESSION['nom']); ?>
        <?php if($_SESSION['sexe'] == "homme"){
            echo "Mr ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }else{
            echo "Mme ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }?>
    </div>
    <div class="text-center">
        <h3>===> Affichage d'une virgule à la place du point pour la taille</h3>
        <?php $_SESSION['taille']=str_replace('.', ',',($_SESSION['taille'])); ?>
        <?php if($_SESSION['sexe'] == "homme"){
            echo "Mr ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }else{
            echo "Mme ". $_SESSION['prenom'] . ' ' . $_SESSION['nom']. "<br>J'ai " . $_SESSION['age']. " ans et je mesure " . $_SESSION['taille'] . "m.";

        }?>    </div>
    <?php session_reset()?>
</div>





<?php
$content = ob_get_clean();
require "template.php";

?>