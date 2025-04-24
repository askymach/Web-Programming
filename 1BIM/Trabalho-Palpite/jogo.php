<?php
require_once 'models/Jogo.php';
require_once 'models/Palpite.php';

if (!isset($_GET['palpite'])) {
    echo "<h1>Erro: Nenhuma palpite foi inserido na URL! Por favor, insira um palpite!</h1>";
    echo "<p><a href='index.php'>Voltar à página inicial</a></p>";
    exit;
}

$palpiteEscolhido = $_GET['palpite'];
$jogo = new Jogo();
$jogo->escolherPalpiteCorreto();

if ($jogo->verificarPalpite($palpiteEscolhido)) {
    $palpite = $jogo->obterPalpitePorId($palpiteEscolhido);
    echo "<h1>🏆 Parabéns! Você acertou!</h1>";
    echo "<p>O carro era: <strong>{$palpite->nome}</strong></p>";
    echo "<img src='images/{$palpite->imagem}' alt='{$palpite->nome}' width='400' />";
} else {
    $correto = $jogo->obterPalpiteCorreto();
    echo "<h1>❌ Que pena, você errou!</h1>";
    echo "<p>O carro era: <strong>{$correto->nome}</strong></p>";
    echo "<p>Veja uma imagem borrada dele como dica:</p>";
    echo "<img src='images/borrada_{$correto->imagem}' alt='Dica' width='400' />";
    echo "<p><a href='index.php'>Tentar novamente</a></p>";
}
