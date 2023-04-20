<?php

// Tableau avec chiffre

$tab = [12,14,15,18,10];
for($i=0; $i<count($tab); $i++){
    echo $tab[$i]. "\n";
}

// Tableau avec prénoms

$prenoms = ["Pierre","Paul","Jacques"];
for($i=0; $i<count($prenoms); $i++){
    echo $i. ": " .$prenoms[$i]. "\n";
}

// Tableau avec Remplissage et Affichage

$notes=[];
for($i=0; $i<3; $i++){
    $saisie = readline("nombre : ");
    $notes[$i] = $saisie;
}
foreach ($notes as $key => $value) {
    echo value . "\n";
}

?>