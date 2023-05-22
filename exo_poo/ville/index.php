<?php

require_once 'ville.php';

$ville1 = new ville();

$ville1->nom="Dunkerque";

$ville1->depart="59";

$ville2 = new ville();

$ville2->nom="Paris";

$ville2->depart="75";

echo $ville1->ville();

echo $ville2->ville();
?>


