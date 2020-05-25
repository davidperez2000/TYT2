<?php
function obtenerusuarios($db){
    $users = array();	
	$sql = "SELECT usuario FROM usulog where chat='1'";
	$resultado = mysqli_query($db, $sql);
	if ($resultado) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			$users[] = $row['usuario'];
		}
	}
	return $users;
}
function comprobarchat($user,$db){
	$verdad=false;
	$sql = "SELECT chat FROM usulog where DNI='$user'";
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