<?php

echo "Pàgina aberta!";

$nome = $_GET['nome'];

echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_GET['sobrenome'];
echo " " . $sobrenome;

/*

metodo get:
http://localhost/lingprogweb/1bim/11_04/get.php?nome=Arthur&sobrenome=Rhitta


*/
