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

function ppcm($a, $b)
{
    $pgcd = pgcd($a, $b);
    return ($a * $b) / $pgcd;
}

$num1 = 24;
$num2 = 36;

$ppcm = ppcm($num1, $num2);

echo "Le PPCM de $num1 et $num2 est: $ppcm";
?>