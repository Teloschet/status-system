<?php

include("config.php"); 

$email = $_POST['email'];
$password = $_POST['password'];
$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' and  password = '$password'");
$row = mysqli_fetch_assoc($sql);
if($row > 0) {
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    echo "<script type='text/javascript'>alert('Logado com sucesso!'); location.href='inicial.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Login Falhou!'); location.href='index.php';</script>";
}
?>