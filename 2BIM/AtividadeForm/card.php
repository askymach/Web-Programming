<?php
require_once 'models/Carro.php';

$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = $_POST['ano'] ?? '';
$foto = $_POST['foto'] ?? '';

$carro = new Carro($marca, $modelo, $ano, $foto);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <title>Card do Carro</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
      <h1 class="text-center text-2xl font-bold text-gray-800">Card do Carro</h1>
      <?php $carro->exibirCard(); ?>
</body>

</html>
