<?php
// 1)
function calculerPrixTTC($prixHT, $nombreArticles, $tauxTVA) {
    $prixTTC = ($prixHT * $nombreArticles) * (1 + ($tauxTVA / 100));
    return $prixTTC;
}

// Exemple
$prixHT = 10.50;
$nombreArticles = 2;
$tauxTVA = 20;
$prixTTC = calculerPrixTTC($prixHT, $nombreArticles, $tauxTVA);
echo "Le prix TTC est de : " . $prixTTC . " €";

// 2)
function pgcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return pgcd($b, $a % $b);
    }
}

$a = readline('Entrer le premier chiffre : ');
$b = readline('Entrer le deuxième chiffre : ');

$resultat = pgcd($a, $b);

echo "Le PGCD de $a et $b est : $resultat";

// 3)

function ppcm($a, $b) {
    $r = $a % $b;
    while ($r != 0) {
        $a = $b;
        $b = $r;
        $r = $a % $b;
    }
    $pgcd = $b;
    $ppcm = ($a * $b) / $pgcd;
    return $ppcm;
}

$ppcm = ppcm($a, $b);
echo "Le PPCM de $a et $b est : $ppcm";

// recap

?>

