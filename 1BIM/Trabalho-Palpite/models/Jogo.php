<?php
require_once 'models/Palpite.php';

class Jogo
{
    private $palpites = [];
    private $palpiteCorreto;

    public function __construct()
    {
        $this->palpites = [
            new Palpite("Acura Integra Type R", "imagens/images/acura.jpg"),
            new Palpite("BMW E36", "imagens/images/bmw.jpg"),
            new Palpite("Chevrolet Kadett GSI", "imagens/images/kadett.jpg"),
            new Palpite("DeLorean DCM-12", "imagens/delorean.jpg"),
            new Palpite("Honda Civic EJ1", "imagens/images/ej1.jpg"),
            new Palpite("Audi A3", "imagens/images/a3.jpg"),
            new Palpite("Mitsubishi Eclipse GSX", "imagens/images/eclipse.jpg"),
            new Palpite("Nissan Skyline R33", "imagens/images/r33.jpg"),
        ];
    }

    public function escolherPalpiteCorreto()
    {
        $this->palpiteCorreto = rand(0, count($this->palpites) - 1);
    }

    public function verificarPalpite($palpiteUsuario)
    {
        return ($palpiteUsuario == $this->palpiteCorreto + 1);
    }

    public function obterPalpiteCorreto()
    {
        return $this->palpites[$this->palpiteCorreto];
    }

    public function obterPalpitePorId($id)
    {
        return $this->palpites[$id - 1];
    }
}
