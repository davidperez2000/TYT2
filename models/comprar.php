<?php
function viaje($db,$text,$pago,$destino,$salida,$pasajeros){
    $sql="INSERT INTO viajes(destino,salida,especificacion,pago,pasajeros) values('$destino','$salida','$text','$pago','$pasajeros')";
    $resultado=mysqli_query($db, $sql);
    return $resultado;
}
function codigoviaje ($db){
    $sql="select max(codviaje) as cod from viajes";
    $resultado=mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($resultado);
    $codigo=$row['cod'];
    return $codigo;
}
function viajes2($db,$dni,$codigo,$fecha,$fechafin){
    $sql="INSERT INTO viajesusu values('$dni','$codigo','$fecha','$fechafin')";
    $resultado=mysqli_query($db, $sql);
    return $resultado;
}
function datos($dni,$db){
    $sql="SELECT nombre , email from usuariosreg where dni='$dni' ";
    $resultado = mysqli_query($db, $sql);
	if ($resultado) {
    $datos = mysqli_fetch_assoc($resultado);
    }
        return $datos;
}
function limpiar($db,$codigo){
    $sql="DELETE from viajes where codviaje='$codigo'";
    mysqli_query($db, $sql);
}
?>