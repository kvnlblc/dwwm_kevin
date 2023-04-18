<?php
$heure = Readline("Entrer une heure :");
$minute = Readline("La minute :");
$seconde = Readline("La seconde :");
$seconde = $seconde +1;

if($seconde = 60){
    $seconde = 0;
    $minute = $minute + 1;
}

if($minute = 60){
    $minute = 0;
    $heure = $heure + 1;
}

echo("Dans une minute, il sera ". $heure . " heure(s) ". $minute ." minute(s)" . $seconde ." seconde(s)");

?>