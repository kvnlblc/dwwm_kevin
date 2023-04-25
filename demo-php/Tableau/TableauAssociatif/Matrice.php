<?php

//gère le nombre de lignes
for ($i = 0; $i < 8; $i++) {

    //gère les caractère à afficher sur chaque lignes
    for ($j = 0; $j <= $i; $j++) {

        //On vérifie si j est égal à 0  pour afficher x sur le bord gauche 
        //j est égal à i pour afficher x sur le bord droit
        // si i est égal à 7 pour afficher x sur la dernière ligne
        if ($j == 0 || $j == $i || $i == 7) {
            echo "x";
        } else {
            echo "o";
        }
    }
    echo "\n";
}

?>