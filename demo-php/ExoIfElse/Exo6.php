<?php
$heure = Readline("Entrer une heure :");
$minute = Readline("La minute :");
$minute = $minute +1;

if($minute == 60){
    $minute = 0;
    $heure = heure + 1;
}


else{
    echo("Dans une minute, il sera ". $heure . " heure(s) ". $minute ." minute(s)");
}
?>