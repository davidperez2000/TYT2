<?php
session_start();
$login=file("../views/conectados.txt");
$user=$_SESSION['nombre'];
$arch="";
$fp = fopen("../views/conectados.txt","w+");
fwrite($fp, $arch);
fclose($fp);
$fp1 = fopen("../views/conectados.txt","a");
for ($i=0; $i <sizeof($login) ; $i++) { 
    $log=trim($login[$i]);
    if($log!=$user){
        fwrite($fp1, $log.PHP_EOL);
    }
}
fclose($fp1);
session_destroy();
header("Location:../index.php");
?>