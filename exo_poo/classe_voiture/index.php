<?php
$vitesseactuelle = 0;

require_once 'voiture.php';

$vw = new voiture('VW','Tiguan','2010','Rouge');

echo "<div>";
$vw->affichage();
echo"</div>";


?>