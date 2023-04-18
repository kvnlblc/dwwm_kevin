<?php
$saisie = Readline("Entrer un chiffre en 10 et 20 :");
while($saisie <= 10 && $saisie >= 20){
    echo("Ce chiffre est compris entre 10 et 20.");

}
if($saisie > 20){
    echo("Plus petit !");
}elseif($saisie < 10){
    echo("Plus grand !");
}

?>