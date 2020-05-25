<?php
session_start();
require("../db/conexion.php");
require("../models/comprar.php");
$destino=$_SESSION['compra']['destino'];
$text="";
$cont=0;
if (isset($_POST['opti'])) {
    foreach($_POST['opti'] as $selected){
        $text=$text.$selected." ";
        $cont++;    
    }
    if ($cont==2) {
         $text=$text." Low Cost";  
    }else {
        $text=$text." Medium Cost";  
    }
} else {
    $text="guia pensión completa lugares emblematicos spa High Cost "; 
}
$pasajeros=$_SESSION['compra']['viajeros'];
$salida=$_SESSION['compra']['salida'];
$fecha=$_SESSION['compra']['fecha'];
$pago=$_SESSION['compra']['pago'];
$DNI=$_SESSION['user'];
$enviar=viaje($db,$text,$pago,$destino,$salida,$pasajeros);
if ($enviar) {
    $datos=datos($DNI,$db);
    $nombre=$datos['nombre'];
    $email=$datos['email'];
    $codigo=codigoviaje($db);
    $fechafin=date("Y-m-d",strtotime($fecha."+ 5 days"));
    $enviar2=viajes2($db,$DNI,$codigo,$fecha,$fechafin);
    $subject = "Compra de viaje";
 if($enviar2){
=======
    if($enviar2){
        $subject="Travel and time ";

    $body="tu viaje incluye ".$text." sales el dia ".$fecha."<br> Muchas Gracias por su compra ".$nombre;
    }else {
        limpiar($db,$codigo);
        $body="Ha ocurrido un error en la compra de su viaje ";
    }
    include("correo.php");
   }
?>

