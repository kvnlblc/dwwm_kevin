<?php
$nombre = rand(1, 9);

echo "La table de multiplication de $nombre est:\n";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat\n";
}
?>