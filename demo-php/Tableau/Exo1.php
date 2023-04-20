<?php

$somme=0;
$notes=[];
for($i=0;$i<9;$i++){ 
    $saisie = readline("nombre : ");
    $notes[$i] = $saisie;
    $somme=$somme+ $notes[$i];
    echo $somme ."\n";
}
$moyenne=$somme/9;
echo  "la moyenne ". $somme . " est : ". $moyenne ;

?>