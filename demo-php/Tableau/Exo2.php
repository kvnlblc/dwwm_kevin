<?php

// $tab = readline("Entrez vos nombres");
// $tab = array($tab);

// $count_pos = 0;
// $count_neg = 0;

// foreach ($tab as $value) {
//     if ($value >= 0) {
//         $count_pos++;
//     } else {
//         $count_neg++;
//     }
// }

$count_pos = 0;
$count_neg = 0;

$notes=[];
$saisietab = readline("Entrez la longueur du tableau : ");
for($i=0;$i<$saisietab;$i++){ 
    $tab = readline("Entrez vos nombres : ");
    $tab = array($tab);
    if ($tab >= 0) {
        $count_pos++;
    } else {
        $count_neg++;
    }
}
echo "Nombre de valeurs positives : " . $count_pos . "\n";
echo "Nombre de valeurs négatives : " . $count_neg;

?>