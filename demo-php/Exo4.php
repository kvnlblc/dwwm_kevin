<?php
        $nombre1 = Readline("Entre le premier nombre:");
        $nombre2 = Readline("Entre le deuxième nombre:");
        if($nombre1 > 0 and $nombre2 > 0){
            echo("Positif");
        }elseif($nombre1 > 0 and $nombre2 > 0){
            echo ("Negatif");
        }
        else{
            echo("Nul");
        }
    ?>