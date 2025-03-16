<?php

$somaPar = 0;
$somaImpar = 0;
for($i=20; $i<=70; $i++) {
    if($i % 2 == 0)
        $somaPar = $somaPar + $i;
    else
        $somaImpar = $somaImpar + $i;
}

echo "SOMA DOS PARES ENTRE 20 E 70: " . $somaPar;
echo "<br>SOMA DOS ÍMPARES ENTRE 20 E 70: " . $somaImpar;