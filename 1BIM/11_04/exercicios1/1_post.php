<?php

echo "Soma de dois numeros";

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$soma = $num1 + $num2;

echo "<br>";

echo "O valor de num1 é: $num1";
echo "<br>";
echo "O valor de num2 é: $num2";
echo "<br>";
echo "A soma dos dois valores é: $soma";
