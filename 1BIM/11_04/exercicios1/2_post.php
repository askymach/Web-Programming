<?php

echo "Media de numeros";

echo "<br>";

$num1 = $POST["num1"];
$num2 = $POST["num2"];
$num3 = $POST["num3"];

$media = $num1 + $num2 + $num3 / 3;

echo "O valor de num1 é: $num1";
echo "<br>";
echo "O valor de num2 é: $num2";
echo "<br>";
echo "O valor de num3 é: $num3";
echo "<br>";
echo "A media dos dois valores é: $media";
