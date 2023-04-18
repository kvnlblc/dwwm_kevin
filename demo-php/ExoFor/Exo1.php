<?php
// Générer un nombre aléatoire entre 1 et 9
$nombre = rand(1, 9);

echo "La table de multiplication de $nombre est:\n";

// Afficher la table de multiplication du nombre généré
for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat\n";
}
?>