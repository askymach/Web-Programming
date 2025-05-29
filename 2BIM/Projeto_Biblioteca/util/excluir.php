<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

if (isset($_GET["id"])) {
      $id = $_GET["id"];

      $con = Conexao::getConexao();
      $sql = "DELETE FROM livros WHERE id = ?";
      $stm = $con->prepare($sql);
      $stm->execute([$id]);
}

header("Location: index.php");
exit;
