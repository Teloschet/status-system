<?php

include("config.php"); 

$username = $_POST['email'];
$password = $_POST['password'];
$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' and  password = '$password'");
$row = mysql_num_rows($sql);
if($row > 0) {
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    echo "<script type='text/javascript'>alert('Logado com sucesso!'); location.href='inicial.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Login Falhou!'); location.href='index.php';</script>";
}
?>