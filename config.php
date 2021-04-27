<?php

// Códigos desenvolvidos por Telos, 2021.
// Licença para Telos Company.

$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($host, $username, $password);

if(!$con) {
    die ("Erro ao Conectar!");
}

$db = mysqli_select_db($con, "miltemp");

if(!$db) {
    die ("Banco de Dados Não Encontrado!");
}

?>