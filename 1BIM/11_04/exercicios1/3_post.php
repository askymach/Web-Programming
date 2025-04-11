<?php

if (isset($_GET['cor'])) {

    $cor = $_GET['cor'];

    if ($cor != "") {

        echo "<body style='background-color:" . $cor . ";'";

        echo "</body>";
    } else
        echo " Por favor, informe o parametro 'cor'!";
} else {
    echo "Informe o parametro 'cor'!";
}

//http://localhost/lingprogweb/1bim/11_04/exercicios1/3.php?cor=
