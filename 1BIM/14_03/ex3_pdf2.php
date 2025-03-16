<?php
$cidades = [
    ['nome' => 'Foz do Iguaçu', 'habitantes' => '250.000', 'area' => '500km²', 'altitude' => '145m', 'estado' => 'Paraná-PR'],
    ['nome' => 'Cascavel', 'habitantes' => '300.000', 'area' => '420km²', 'altitude' => '320m', 'estado' => 'Paraná-PR'],
    ['nome' => 'Chapecó', 'habitantes' => '240.000', 'area' => '120km²', 'altitude' => '620m', 'estado' => 'Santa Catarina-SC'],
    ['nome' => 'Blumenau', 'habitantes' => '330.000', 'area' => '200km²', 'altitude' => '85m', 'estado' => 'Santa Catarina-SC'],
    ['nome' => 'Curitiba', 'habitantes' => '1.500.000', 'area' => '300km²', 'altitude' => '850m', 'estado' => 'Paraná-PR']
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
