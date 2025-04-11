<?php

require_once 'model/Pessoa.php';

// Vverifica ------------------------------------
if (!isset($_GET['tipo'], $_GET['nome'], $_GET['sobrenome'], $_GET['idade'])) {
    echo "Erro: Parâmetros obrigatórios ausentes.";
    exit;
}

$tipo = $_GET['tipo'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];

// Class
if ($tipo === 'C') {
    $pessoa = new Pessoa($nome, $sobrenome, $idade);

    echo "Nome completo: " . $pessoa->getNomeCompleto() . "<br>";
    echo "Idade: " . $pessoa->getIdade();

    // Array
} elseif ($tipo === 'A') {
    $pessoa = [
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'idade' => $idade
    ];

    echo "Nome completo: {$pessoa['nome']} {$pessoa['sobrenome']}<br>";
    echo "Idade: {$pessoa['idade']}";
} else {
    echo "Erro! O tipo precisa ser 'A' para arraay ou 'C' para classe";
}
