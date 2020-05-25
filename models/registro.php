<?php
function registrar($user,$pass,$nombre,$apellido,$DNI,$Direccion,$Email,$fecha,$cp,$db){
    $sql="INSERT INTO usuariosreg values('$DNI','$nombre','$apellido','$fecha','$cp','$Email','$Direccion' )";
    $resultado=mysqli_query($db, $sql);
    if ($resultado) {
    $sql2="INSERT INTO usulog values('$user','$pass','$DNI','1')";
    $resultado=mysqli_query($db, $sql2);
    }
    return $resultado;
}
function eliminarerror($DNI,$db){
    $sql="DELETE from usuariosreg where dni='$DNI'";
    mysqli_query($db, $sql);
}
?>