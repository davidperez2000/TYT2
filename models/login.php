<?php
function comprobar($user,$pass,$db){
    $comprobar=false;
    $sql="SELECT usuario , contrasena from usulog ";
    $resultado = mysqli_query($db, $sql);
	if ($resultado) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			if($user==$row['usuario'] and $pass==$row['contrasena']){
                $comprobar=true;
            }
		}
    }
return $comprobar;
}
function dni($db,$user){
    $sql="SELECT dni from usulog where usuario='$user'";
    $resultado = mysqli_query($db, $sql);
	if ($resultado) {
		$row = mysqli_fetch_assoc($resultado);
			$dni=$row['dni'];
	}
return $dni;
}
function chat($user,$db){
	$verdad=false;
	$sql = "SELECT chat FROM usulog where usuario='$user'";
	$resultado = mysqli_query($db, $sql);
	if ($resultado) {
		$row = mysqli_fetch_assoc($resultado);
		if($row['chat']!=0){
		$verdad=true;
		}	
	}
	return $verdad;
}
?>