<?php
        $nombre1 = Readline("Entre le premier nombre:");
        $nombre2 = Readline("Entre le deuxième nombre:");
        if($nombre1 > 0 && $nombre2 > 0 || $nombre1 < 0 && $nombre2 < 0){
            echo("Positif");
        }else{
            echo("Negatif");
        }
    ?>