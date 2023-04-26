<?php

//1)
$nombre = rand(1, 20);

if ($nombre >= 1 && $nombre <= 5) {
    echo "Le nombre est compris entre 1 et 5";
} elseif ($nombre >= 6 && $nombre <= 10) {
    echo "Le nombre est compris entre 6 et 10";
} elseif ($nombre >= 11 && $nombre <= 15) {
    echo "Le nombre est compris entre 11 et 15";
} else {
    echo "Le nombre est compris entre 16 et 20";
}

//2)
$nombre = rand(0, 20);
echo $nombre;

if ($nombre < 7) {
    echo "Bonjour";
} elseif ($nombre < 14) {
    echo "Salut";
} else {
    echo "Hello";
}

?>