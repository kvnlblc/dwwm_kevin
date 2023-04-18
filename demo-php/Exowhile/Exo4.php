<?php
function pgcd($a, $b)
{
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}

$num1 = Readline("Premier chiffre : ");
$num2 = Readline("Deuxième chiffre : ");

$pgcd = pgcd($num1, $num2);

echo "Le PGCD de $num1 et $num2 est: $pgcd";
?>