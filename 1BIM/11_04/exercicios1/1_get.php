<?php

echo "Soma de dois numeros";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$soma = $num1 + $num2;

echo "<br>";

echo "O valor de num1 é: $num1";
echo "<br>";
echo "O valor de num2 é: $num2";
echo "<br>";
echo "A soma dos dois valores é: $soma";


//http://localhost/lingprogweb/1bim/11_04/exercicios1/1_get.php?num1=5&num2=5
