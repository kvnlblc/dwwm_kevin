<?php
echo "Entrez un nombre entier: ";
$nombre = (int) readline();

echo "Les cinq nombres précédents sont: ";
for ($i = $nombre - 5; $i < $nombre; $i++) {
    echo "$i ";
}

echo "$nombre ";

echo "Les cinq nombres suivants sont: ";
for ($i = $nombre + 1; $i <= $nombre + 5; $i++) {
    echo "$i ";
}
?>