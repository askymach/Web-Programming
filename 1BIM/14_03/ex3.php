<?php
$retangulos = [
    ['base' => 5, 'altura' => 10],
    ['base' => 7, 'altura' => 3],
    ['base' => 4, 'altura' => 8]];

    echo "<table border='1'>";
    echo "<tr><th>RETÂNGULO</th><th>ÁREA</th></tr>";
foreach ($retangulos as $i => $retangulo) {
    $area = $retangulo['base'] * $retangulo['altura'];
    echo "<tr>
            <td>RETÂNGULO " . ($i + 1) . "</td>
            <td>" . $area . "</td>
          </tr>";
}
    echo "</table>";
    
?>
