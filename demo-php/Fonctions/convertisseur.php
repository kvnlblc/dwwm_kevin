<?php
$montant_euros = readline('Entrer le montant : ');
$devise = readline('Entrer le pays : ');; // Changez ceci pour convertir en une autre devise

switch($devise) {
  case 'Angleterre':
    $taux_de_change = 0.85; // 1 euro = 0,85 livre sterling
    break;
  case 'USA':
    $taux_de_change = 1.20; // 1 euro = 1,20 dollars américains
    break;
  case 'Canada':
    $taux_de_change = 1.50; // 1 euro = 1,50 dollars canadiens
    break;
  case 'Japon':
    $taux_de_change = 130; // 1 euro = 130 yens japonais
    break;
  case 'Mexique':
    $taux_de_change = 24; // 1 euro = 24 pesos mexicains
    break;
  case 'Maroc':
    $taux_de_change = 11; // 1 euro = 11 dirhams marocains
    break;
  case 'Inde':
    $taux_de_change = 90; // 1 euro = 90 roupies indiennes
    break;
  default:
    echo "La devise sélectionnée n'est pas prise en charge.";
    exit();
}

$montant_converti = $montant_euros * $taux_de_change;

echo $montant_euros . ' euros équivaut à ' . $montant_converti . ' ' . $devise . '.';
?>
