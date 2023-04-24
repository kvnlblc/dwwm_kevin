<?php

$tableau = array();
for ($i = 0; $i < 10; $i++) {
    $tableau[] = rand(0, 100);
}

echo "Le tableau contient : ";
echo implode(", ", $tableau);
echo "\n";

echo "Que voulez-vous faire ?\n";
echo "1. Calculer la somme\n";
echo "2. Trouver le minimum\n";
echo "3. Trouver le maximum\n";
echo "0. Quitter\n";
echo "Votre choix : ";

$choix = trim(fgets(STDIN));

switch ($choix) {
    case 1:
        $somme = array_sum($tableau);
        echo "La somme des éléments du tableau est : $somme\n";
        break;
    case 2:
        $minimum = min($tableau);
        echo "Le minimum des éléments du tableau est : $minimum\n";
        break;
    case 3:
        $maximum = max($tableau);
        echo "Le maximum des éléments du tableau est : $maximum\n";
        break;
    case 0:
        echo "Au revoir !\n";
        break;
    default:
        echo "Choix invalide !\n";
        break;
}

?>
