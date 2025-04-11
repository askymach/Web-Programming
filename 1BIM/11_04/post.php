<?php

echo "Pàgina aberta!";

$nome = $_POST['nome'];

echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_POST['sobrenome'];
echo " " . $sobrenome;

$idade = $_GET['idade'];
echo " " . $idade;

/*

metodo get:
http://localhost/lingprogweb/1bim/11_04/post.php?nome=Arthur&sobrenome=Senna


*/
