<?php
$nombre = Readline("Entrer votre âge :");
if($nombre >= 6 and $nombre <= 7){
    echo("Poussin");
}elseif($nombre >= 8 and $nombre <= 9){
    echo("Pupille");
}elseif($nombre >= 10 and $nombre <= 11){
    echo("Minime");
}elseif($nombre >= 12){
    echo("Cadet");
}else{
    echo("null");
}
?>