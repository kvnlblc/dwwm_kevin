<?php
    require_once "Personnage.php";
    require_once "Humain.php";
    require_once "Zombie.php";
    $personnage1 = new Humain("Toto","Guerrier",10,100,true,2);
    $personnage2 = new Humain("Tata","Archère",5,50,true,3);
    $personnage3 = new Humain("Titi","Archère",5,55,false,2);
    $personnage4 = new Humain("Riri","Voleur",2,10,false,1);
    $zombie1 = new Zombie("Toto","Guerrier",10,100,true,2);
    $zombie2 = new Zombie("Tata","Archère",5,50,true,3);
    $zombie3 = new Zombie("Titi","Archère",5,55,false,2);
    $zombie4 = new Zombie("Riri","Voleur",2,10,false,1);
    $zombie5 = new Zombie("Riri","Voleur",2,10,false,1);

    echo $personnage1;
    echo "*************************<br>";
    echo $personnage2;
    echo "*************************<br>";
    echo $personnage3;
    echo "*************************<br>";
    echo $personnage4;
    echo "*************************<br>";
    echo "Voici les stats de " .  $personnage1->nom . " : <br>";
    $personnage1->modifStats(50,200);

    echo "<br>=============================================================================<br>";
    echo "ZOMBIES<br>";
    echo "=============================================================================<br>";

    echo $zombie1;
    echo "*************************<br>";
    echo $zombie2;
    echo "*************************<br>";
    echo $zombie3;
    echo "*************************<br>";
    echo $zombie4;
    echo "*************************<br>";
    echo $zombie5;
    echo "*************************<br>";
    echo "Voici les stats de " .  $zombie1->nom . " : <br>";
    $zombie1->modifStats(50,200);
   


 ?>