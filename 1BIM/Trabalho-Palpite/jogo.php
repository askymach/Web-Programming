<?php
require_once 'models/Jogo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Jogo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    if (!isset($_GET['palpite'])) {
        echo "<h1>Erro: Nenhum palpite informado!</h1>";
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
        echo "<img src='imagens/{$palpite->imagem}' alt='{$palpite->nome}' />";
    } else {
        $correto = $jogo->obterPalpiteCorreto();
        echo "<h1>❌ Que pena, você errou!</h1>";
        echo "<p>O carro correto era: <strong>{$correto->nome}</strong></p>";
        echo "<p>Veja uma imagem borrada dele como dica:</p>";
        echo "<img src='images/borrada_{$correto->imagem}' alt='Dica' />";
        echo "<p><a href='index.php'>Tentar novamente</a></p>";
    }
    ?>
</body>

</html>
