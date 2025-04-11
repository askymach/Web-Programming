<?php
// verificacao --------------------
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];

    if (is_numeric($a) && is_numeric($b)) {
        echo "<h1>Resultados das operações:</h1>";
        echo "<p>Soma: " . ($a + $b) . "</p>";
        echo "<p>Subtração: " . ($a - $b) . "</p>";
        echo "<p>Multiplicação:" . ($a * $b) . "</p>";


        if ($b != 0) {
            echo "<p>Divisão: " . ($a / $b) . "</p>";
            echo "<p>Resto da divisão: " . ($a % $b) . "</p>";
        } else {
            echo "<p>Divisão: Não é possível dividir por zero.</p>";
            echo "<strong>Resto: Não é possível calcular o resto com divisor zero.</p>";
        }
    } else {
        echo "<p>Informe apenas valores numéricos válidos.</p>";
    }
} else {
    echo "<p>Informe dois valores pelos parâmetros na URL.</p>";
}
