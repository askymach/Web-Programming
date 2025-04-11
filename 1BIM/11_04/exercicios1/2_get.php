<?php

echo "Media de numeros";

echo "<br>";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$media = $num1 + $num2 + $num3 / 3;

echo "O valor de num1 é: $num1";
echo "<br>";
echo "O valor de num2 é: $num2";
echo "<br>";
echo "O valor de num3 é: $num3";
echo "<br>";
echo "A media dos dois valores é: $media";

//http://localhost/lingprogweb/1bim/11_04/exercicios1/2_get.php?num1=12&num2=15&num3=17
