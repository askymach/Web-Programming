<?php

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __construct($nome, $sobrenome, $idade)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
}
