<?php 
$compteur=0;function readtable($compteur){
    foreach ($_SESSION as $cle => $valeur) {
        echo 'à la ligne n°'.$compteur.' correspond la clé "'.$cle .'" et content "'. $valeur.'"<br>';
        $compteur++;
    }
    return $compteur;
}
?>