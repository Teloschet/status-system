<?php
include "config.php";

$sql = mysql_query("SELECT * FROM arquivo ORDER BY id DESC");

$row = mysql_num_rows($sql);

session_start();
if(!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: index.php");
    exit;
} else {
    echo "";
}
?>