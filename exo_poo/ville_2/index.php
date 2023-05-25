<?php

require_once 'ville.php';

$ville1 = new ville("Dunkerque","59");
$ville2 = new ville("Paris","75");
echo $ville1->ville();
echo $ville2->ville();



?>