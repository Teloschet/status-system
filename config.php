<?php

// Códigos desenvolvidos por Telos, 2021.
// Licença para Telos Company.

$con = mysqli_connect("localhost", "root", "");

if(!$con) {
    die ("Erro ao Conectar!");
}

$db = mysqli_select_db("miltemp", $con);

if(!$db) {
    die ("Banco de Dados Não Encontrado!");
}

?>