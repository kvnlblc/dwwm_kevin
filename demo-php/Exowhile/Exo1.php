<?php
$saisie = Readline("Entrer un chiffre en 1 et 3 :");
while($saisie < 1 || $saisie > 3){
    echo("Ce chiffre est compris entre 1 et 3.");

    $saisie = Readline("Ereur : Entrer un chiffre en 1 et 3 :");
}

?>