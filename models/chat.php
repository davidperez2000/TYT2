<?php
session_start();
include("../db/conexion.php");
if (isset($_POST['msg'])) {
    $text = $_POST['msg'];
    $fp = fopen("../views/chat.txt", 'a');
    fwrite($fp, $_SESSION['nombre']."  : ".$text."<br>".PHP_EOL);
    fclose($fp);
    $fp1 = fopen("../views/chattotal.txt", 'a');
    fwrite($fp1, $_SESSION['nombre']."  : ".$text."<br>".PHP_EOL);
    fclose($fp1);
}elseif (isset($_POST['nom'])) {
    $text = $_POST['nom'];
    $sql = "UPDATE usulog set chat='0' where usuario='$text'";
    mysqli_query($db, $sql);
}
?>