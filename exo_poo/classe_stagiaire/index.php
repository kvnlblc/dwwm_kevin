<?php
require_once 'stage.php';

$stage = new Stagiaire('Kevin', array(5,6,5,4,8));

$stage->calculerMoyenne();


$stage->affichage();
?>