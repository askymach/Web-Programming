<?php
//$nome = $_GET['nome'];
//$idade = $_GET['idade'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($nome != '' && $idade != '')
    echo "Bem vindo " . $nome . " - " . $idade . " anos!";
else
    echo "Nome e idade precisam ser inseridos";

echo "<br>";
echo "<a href ='form.php'>Voltar</a>";
