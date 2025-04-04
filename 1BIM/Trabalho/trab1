<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Seleção Brasileira 1994</title>
</head>

<body>
    <h1>Escalação da Seleção Brasileira 1994</h1>
    <table border="1" padding="1" cellspacing="0">
        <tr>
            <th>Número</th>
            <th>Nome</th>
        </tr>

        <?php
        function gerarLinha($numero, $nome, $cor)
        {
            echo "<tr style='background-color: $cor;'>";
            echo "<td>$numero</td>";
            echo "<td>$nome</td>";
            echo "</tr>";
        }

        $jogadores = [
            [1, "Tafarel", "yellow"],
            [2, "Jorginho", "green"],
            [13, "Aldair", "yellow"],
            [15, "Márcio Santos", "green"],
            [6, "Branco", "yellow"],
            [5, "Mauro Silva", "green"],
            [8, "Dunga", "yellow"],
            [17, "Mazinho", "green"],
            [9, "Zinho", "yellow"],
            [11, "Romário", "green"],
            [7, "Bebeto", "yellow"]
        ];

        foreach ($jogadores as $jogador) {
            gerarLinha($jogador[0], $jogador[1], $jogador[2]);
        }
        ?>
    </table>
</body>

</html>
