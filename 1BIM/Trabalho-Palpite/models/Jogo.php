<?php
require_once 'Palpite.php';

class Jogo
{
    private $palpites = [];
    private $palpiteCorreto;

    public function __construct()
    {
        $this->palpites = [
            new Palpite("Acura Integra Type R", "images/acura.jpg"),
            new Palpite("BMW M3 GTR", "images/bmw.jpg"),
            new Palpite("Chevrolet Kadett GSI", "images/kadett.jpg"),
            new Palpite("DeLorean DCM-12", "images/dcm12.jpg"),
            new Palpite("Honda Civic EJ1", "images/ej1.jpg"),
            new Palpite("Audi A3", "images/a3.jpg"),
            new Palpite("Mitsubishi Eclipse GSX", "images/eclipse.jpg"),
            new Palpite("Nissan Skyline R33", "images/r33.jpg"),
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
