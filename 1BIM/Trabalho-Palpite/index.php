<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Palpite: Edição Automotiva</title>
</head>

<body>
    <h1>Adivinhe o carro</h1>
    <p>Escolha um número:</p>
    <ul>
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <li><a href="jogo.php?palpite=<?= $i ?>">Palpite <?= $i ?></a></li>
        <?php endfor; ?>
    </ul>
</body>

</html>
