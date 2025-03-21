<?php
// Array de presidentes
$presidentes = [
    (object)[
        'numero' => 16,
        'nome' => 'Eurico Gaspar Dutra',
        'inicio' => 1946,
        'fim' => 1951
    ],
    (object)[
        'numero' => 17,
        'nome' => 'Getúlio Vargas',
        'inicio' => 1951,
        'fim' => 1954
    ],
    (object)[
        'numero' => 18,
        'nome' => 'Café Filho',
        'inicio' => 1954,
        'fim' => 1955
    ],
    (object)[
        'numero' => 19,
        'nome' => 'Carlos Luz',
        'inicio' => 1955,
        'fim' => 1955
    ],
    (object)[
        'numero' => 20,
        'nome' => 'Nereu Ramos',
        'inicio' => 1955,
        'fim' => 1956
    ],
    (object)[
        'numero' => 21,
        'nome' => 'Juscelino Kubitschek',
        'inicio' => 1956,
        'fim' => 1961
    ]
];

// Função para imprimir a tabela de presidentes
function imprimirTabelaPresidentes($presidentes) {
    echo '<table border="1">';
    echo '<tr><th>Número</th><th>Nome</th><th>Início</th><th>Fim</th></tr>';
    foreach ($presidentes as $presidente) {
        echo '<tr>';
        echo '<td>' . $presidente->numero . '</td>';
        echo '<td>' . $presidente->nome . '</td>';
        echo '<td>' . $presidente->inicio . '</td>';
        echo '<td>' . $presidente->fim . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Chamar a função para imprimir a tabela
imprimirTabelaPresidentes($presidentes);
?>
