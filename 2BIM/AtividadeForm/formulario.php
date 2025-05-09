<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <title>Cadastro de Carro</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
      <div class="w-full max-w-md bg-white p-6 rounded-xl shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Cadastro de Carro</h1>
            <form action="card.php" method="post" class="space-y-4">
                  <div>
                        <label class="block text-sm font-medium text-gray-700">Marca</label>
                        <input type="text" name="marca" required class="w-full border rounded px-3 py-2">
                  </div>
                  <div>
                        <label class="block text-sm font-medium text-gray-700">Modelo</label>
                        <input type="text" name="modelo" required class="w-full border rounded px-3 py-2">
                  </div>
                  <div>
                        <label class="block text-sm font-medium text-gray-700">Ano</label>
                        <input type="number" name="ano" required class="w-full border rounded px-3 py-2">
                  </div>
                  <div>
                        <label class="block text-sm font-medium text-gray-700">Link da Foto</label>
                        <input type="text" name="foto" required class="w-full border rounded px-3 py-2">
                  </div>
                  <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                              Gerar Card
                        </button>
                  </div>
            </form>
      </div>
</body>

</html>
