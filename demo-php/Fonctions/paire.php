<?php

$essai = 0;

do {
    $essai++;

    if ($essai > 1) {
        echo "Le nombre n'est pas pair !\n";
    }

    echo "********** Essai numéro ". $essai . " **********\n";

    $nombre = (int) readline();

} while ($nombre % 2 !== 0 || $nombre % 3 !== 0);

echo "Bravo, vous avez saisi le nombre correct en $essai essai(s) : $nombre";

?>