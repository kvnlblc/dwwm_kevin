<?php
// Demander à l'utilisateur de saisir un nombre entier
echo "Entrez un nombre entier: ";
$nombre = (int) readline();

// Afficher les cinq nombres précédents
echo "Les cinq nombres précédents sont: ";
for ($i = $nombre - 5; $i < $nombre; $i++) {
    echo "$i ";
}

// Afficher le nombre saisi
echo "$nombre ";

// Afficher les cinq nombres suivants
echo "Les cinq nombres suivants sont: ";
for ($i = $nombre + 1; $i <= $nombre + 5; $i++) {
    echo "$i ";
}
?>