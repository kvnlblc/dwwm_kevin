<?php 
function convertToromain($num) {        // Ici ont défini le tableau
    $tableau = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    $result = '';                                      // Ici ont défini =result à 0
    foreach ($tableau as $romain => $number) {        // Ici ont parcour le tableau et on défini la key $romain et la valeur $number
        $trouver = intval($num / $number);           // intval permet de Retourne la valeur entier de value en utilisant la base fourni pour la conversion (par défaut en base 10)
        $result .= str_repeat($romain, $trouver);   // .= permet de faire une concatenation
        $num = $num % $number;                     // Ici ont récupère le reste de la division
    }
    return $result;
}

?>