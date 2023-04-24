<?php
//1)
$tabNotes = array('boucher'=>16,'bourdette'=>13, 'bourdeau'=>12, 'boutte'=>19);
$somme=0;
$moyenne=0;

foreach($tabNotes as $nom => $valeur){
    echo "Les nom des élèves sont : " . $nom . " avec une note de " .$valeur . "\n";
}

//2)
foreach($tabNotes as $nom => $valeur){
    $somme=$somme+$valeur;
    $moyenne++;
}

$resultat=$somme/$moyenne;
echo "La moyenne des notes :" .$resultat;

?>