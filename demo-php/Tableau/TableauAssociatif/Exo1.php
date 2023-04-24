<?php
//1)
$chomage = array('Autriche' => 4.9, 'Allemagne' => 9.3, 'Danemark' => 4.8, 'Espagne' => 9.4, 'France' => 9.7);
$TauxChomage = 0;

foreach($chomage as $pays => $valeur){
    echo "Les pays concerné par le chômage sont :\n" . $pays . " et $valeur\n";
}

echo "Le taux de chômage est égale à " . $TauxChomage .".\n";

//2)
foreach($chomage as $pays => $valeur){
    if($valeur < 5){
        echo "Les pays ayant moins de 5% de chômages sont : \n". $pays . "\n";
    }
}

//3)
foreach($chomage as $pays => $valeur){
    $minimum=min($chomage);
    if($valeur==$minimum){
        echo "Le pays ayant le taux de chômage le plus faible est : ". $pays . "\n";
    }
}
?>