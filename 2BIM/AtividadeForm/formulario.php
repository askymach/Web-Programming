<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <title>Cadastro de Carro</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
      <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Cadastro de Carro</h1>
            <form action="card.php" method="post" class="space-y-4">
                  <div>
                        <label class="block text-sm font-semibold text-gray-700">Marca</label>
                        <input type="text" name="marca" class="w-full border rounded px-3 py-2" required>
                  </div>
                  <div>
                        <label class="block text-sm font-semibold text-gray-700">Modelo</label>
                        <input type="text" name="modelo" class="w-full border rounded px-3 py-2" required>
                  </div>
                  <div>
                        <label class="block text-sm font-semibold text-gray-700">Ano</label>
                        <input type="number" name="ano" class="w-full border rounded px-3 py-2" required>
                  </div>
                  <div>
                        <label class="block text-sm font-semibold text-gray-700">Link da Foto</label>
                        <input type="text" name="foto" class="w-full border rounded px-3 py-2" required>
                  </div>
                  <div class="text-right">
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                              Gerar Card
                        </button>
                  </div>
            </form>
      </div>
</body>

</html>
