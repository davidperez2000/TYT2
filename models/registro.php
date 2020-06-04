<?php
function registrar($user,$pass,$nombre,$apellido,$DNI,$Direccion,$Email,$fecha,$cp,$db){
	$comprobar="SELECT count(*) as x from usuariosreg where dni='$DNI'";
	$res=mysqli_query($db, $comprobar);
		$comprobar2 ="SELECT count(*) as x from usuariosreg where email='$Email'";
		$res2=mysqli_query($db, $comprobar2);
$fila = mysqli_fetch_assoc($res);
$email = mysqli_fetch_assoc($res2);
	if($fila["x"] == 0 && $email["x"] == 0){
		$sql="INSERT INTO usuariosreg values('$DNI','$nombre','$apellido','$fecha','$cp','$Email','$Direccion' )";
		$resultado=mysqli_query($db, $sql);
	}else {
		$resultado=false;
	}
	if ($resultado) {
		
	$comprobar="SELECT count(*) as x from usulog where usuario='$user'";
    $res3=mysqli_query($db, $comprobar);
	$fila2 = mysqli_fetch_assoc($res3);
    if($fila2['x']==0){
	$sql2="INSERT INTO usulog values('$user','$pass','$DNI','1')";
    $resultado=mysqli_query($db, $sql2);
    }else {
	$sql2="DELETE from usuariosreg where dni='$DNI'";
    mysqli_query($db, $sql2);
	}
    return $resultado;
}
}


?>