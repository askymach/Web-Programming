<?php
class Palpite
{
    public $nome;
    public $imagem;

    public function __construct($nome, $imagem)
    {
        $this->nome = $nome;
        $this->imagem = $imagem;
    }
}
