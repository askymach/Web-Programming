<?php
class Carro
{
    private $marca;
    private $modelo;
    private $ano;
    private $foto;

    public function __construct($marca, $modelo, $ano, $foto)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->foto = $foto;
    }

    public function exibirCard()
    {
        echo "
        <div class='max-w-sm mx-auto mt-10 bg-white border rounded-xl shadow-lg overflow-hidden'>
            <img src='{$this->foto}' alt='Imagem do carro' class='w-full h-56 object-cover'>
            <div class='p-4'>
                <h2 class='text-xl font-bold text-gray-800'>{$this->marca} {$this->modelo}</h2>
                <p class='text-gray-600'>Ano: {$this->ano}</p>
            </div>
        </div>";
    }
}
