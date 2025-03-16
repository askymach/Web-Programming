<?php
$cidades = [
    ['nome' => 'FOZ DO IGUAÇU', 'habitantes' => '250.000', 'area' => '500KM²', 'altitude' => '145M', 'estado' => 'PARANÁ-PR'],
    ['nome' => 'CASCAVEL', 'habitantes' => '300.000', 'area' => '420KM²', 'altitude' => '320M', 'estado' => 'PARANÁ-PR'],
    ['nome' => 'CHAPECO', 'habitantes' => '240.000', 'area' => '120KM²', 'altitude' => '620M', 'estado' => 'SANTA CATARINA-SC'],
    ['nome' => 'BLUEMENAU', 'habitantes' => '330.000', 'area' => '200KM²', 'altitude' => '85M', 'estado' => 'SANTA CATARINA-SC'],
    ['nome' => 'CURITIBA', 'habitantes' => '1.500.000', 'area' => '300KM²', 'altitude' => '850M', 'estado' => 'PARANÁ-PR']
];

    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Habitantes</th><th>Área</th><th>Altitude</th><th>Estado</th></tr>";
foreach ($cidades as $cidade) {
    echo "<tr>
            <td>{$cidade['nome']}</td>
            <td>{$cidade['habitantes']}</td>
            <td>{$cidade['area']}</td>
            <td>{$cidade['altitude']}</td>
            <td>{$cidade['estado']}</td>
          </tr>";
}
    echo "</table>";
    
?>
