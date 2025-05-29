<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$con = Conexao::getConexao();

// Tradução
function traduzir($sigla)
{
      $generos = [
            'D' => 'Drama',
            'F' => 'Ficção',
            'R' => 'Romance',
            'O' => 'Outro'
      ];
      return $generos[$sigla] ?? 'Desconhecido';
}

// Verificação
if (isset($_POST["titulo"])) {
      $titulo = $_POST["titulo"];
      $autor = $_POST["autor"];
      $genero = $_POST["genero"];
      $qtdPaginas = $_POST["paginas"];

      $sql = "INSERT INTO livros (titulo, autor, genero, qtd_paginas) VALUES (?, ?, ?, ?)";
      $stm = $con->prepare($sql);
      $stm->execute([$titulo, $autor, $genero, $qtdPaginas]);

      header("Location: index.php");
      exit;
}

// Consulta os livros cadastrados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
      <meta charset="UTF-8">
      <link rel="icon" type="local/png" href="icons/PHP.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Livros</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 font-sans">
      <div class="container mx-auto p-4">

            <!-- Formulário -->
            <h2 class="text-2xl font-semibold mb-4 text-center">Cadastrar Novo Livro</h2>

            <form action="" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto mb-10">
                  <div class="mb-4">
                        <label for="titulo" class="block mb-1 font-medium">Título</label>
                        <input type="text" name="titulo" id="titulo" required class="w-full border border-gray-300 p-2 rounded">
                  </div>

                  <div class="mb-4">
                        <label for="genero" class="block mb-1 font-medium">Gênero</label>
                        <select name="genero" id="genero" required class="w-full border border-gray-300 p-2 rounded">
                              <option value="">--Selecione--</option>
                              <option value="D">Drama</option>
                              <option value="F">Ficção</option>
                              <option value="R">Romance</option>
                              <option value="O">Outro</option>
                        </select>
                  </div>

                  <div class="mb-4">
                        <label for="paginas" class="block mb-1 font-medium">Páginas</label>
                        <input type="number" name="paginas" id="paginas" required class="w-full border border-gray-300 p-2 rounded">
                  </div>

                  <div class="mb-6">
                        <label for="autor" class="block mb-1 font-medium">Autor</label>
                        <input type="text" name="autor" id="autor" required class="w-full border border-gray-300 p-2 rounded">
                  </div>

                  <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                              Gravar
                        </button>
                  </div>
            </form>

            <!-- Lista de livros -->
            <h1 class="text-3xl font-bold mb-4 text-center">Listagem de Livros</h1>

            <div class="overflow-x-auto">
                  <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-blue-600 text-white">
                              <tr>
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Título</th>
                                    <th class="px-4 py-2 text-left">Autor</th>
                                    <th class="px-4 py-2 text-left">Gênero</th>
                                    <th class="px-4 py-2 text-left">Páginas</th>
                                    <th class="px-4 py-2 text-left">Ações</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php foreach ($livros as $l) : ?>
                                    <tr class="border-t hover:bg-gray-50">
                                          <td class="px-4 py-2"><?= $l['id'] ?></td>
                                          <td class="px-4 py-2"><?= $l['titulo'] ?></td>
                                          <td class="px-4 py-2"><?= $l['autor'] ?></td>
                                          <td class="px-4 py-2"><?= traduzir($l['genero']) ?></td>
                                          <td class="px-4 py-2"><?= $l['qtd_paginas'] ?></td>
                                          <td class="px-4 py-2">
                                                <a href="excluir.php?id=<?= $l['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Deseja mesmo excluir este livro?');">
                                                      Excluir
                                                </a>
                                          </td>
                                    </tr>
                              <?php endforeach; ?>
                        </tbody>
                  </table>
            </div>

      </div>
</body>

</html>
