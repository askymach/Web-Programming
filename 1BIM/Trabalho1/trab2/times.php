<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<link rel="stylesheet" href="style.css">';

require_once("modelo/Link.php");

function desenhaBotao($links)
{
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Times de futebol</button>';
    echo '<div class="dropText">';

    foreach ($links as $link) {
        echo '<span><img src="' . $link->getLinkImg() . '" width="20" height="20">' . $link->getInfo() . '</span>';
    }

    echo '</div>';
    echo '</div>';
}

$botao1 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/1655px-Flamengo_braz_logo.svg.png", "Flamengo"),
    new Link("https://pt.m.wikipedia.org/wiki/Ficheiro:Palmeiras_logo.svg", "Palmeiras"),
    new Link("https://seeklogo.com/free-vector-logos/gremio", "Grêmio")
];

$botao2 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Santos_Logo.png/800px-Santos_Logo.png", "Santos"),
    new Link("https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png", "Corinthians"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Cruzeiro_Esporte_Clube_%28logo%29.svg/2048px-Cruzeiro_Esporte_Clube_%28logo%29.svg.png", "Cruzeiro")
];

$botao3 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/FFC_crest.svg/1200px-FFC_crest.svg.png", "Fluminense"),
    new Link("https://upload.wikimedia.org/wikipedia/pt/thumb/9/90/ECBahia.png/150px-ECBahia.png", "Bahia"),
    new Link("", "Atletico-MG")
];

$botao4 = [
    new Link("", "Atletico-PR"),
    new Link("", "Criciuma"),
    new Link("", "ABC")
];

desenhaBotao($botao1);
desenhaBotao($botao2);
desenhaBotao($botao3);
desenhaBotao($botao4);
