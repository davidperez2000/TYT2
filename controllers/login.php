<!DOCTYPE html>
<html lang="es">

<head>
<?php
include("../db/conexion.php");
session_start();
if(!isset($_SESSION['DNI'])){
if (!isset($_POST) || empty($_POST)) { 
    require_once("../views/login.php");
    ?>
    <html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title> Travel and Time - Login </title>
		<meta charset="UTF-8" name="author" content="Travel and Time">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/login.css">
		
    </head>
    
    <body>
	
	<div id="todo">

    <div class="hed">
      
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href='../index.php'><img src="../img/travel.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		<a class="nav-item active" href='../index.php'>Inicio <span class="sr-only">(current)</span></a>
		<a class="nav-item" href='../controllers/viajes.php'>Los Viajes</a>
		<a class="nav-item" href='../controllers/contactanos.php'>Contactanos</a>
		<a class="nav-item" href='../controllers/ayuda.php'>Ayuda</a>
		 <?php
           if(!isset($_SESSION['user'])){
                echo " <a class='nav-item' href='../controllers/login.php'>Login</a>";
            }else {
                echo " <a class='nav-item' href='../controllers/cerrarsession.php'>Cerrar Sesion</a>";
            }
           ?>
		
		
		</div>
		</div>
		</nav>
		
    </div>
	
	
	<div id="divent">
	
	<div id="divlog">
	
    <h1>LOGIN</h1>
	
	</BR>
	
    <form action="" method="post">
		<div>
            <div>
				<p>Introduzca su nombre de usuario</p> <input class="inpt" type="text" name="user" placeholder="">
            </div>
			
			</BR>
			
            <div>
				<p>Introduzca su password</p> <input class="inpt" type="password" name="password" placeholder="">
            </div>
            </BR>
			<div><input class="inpt" type="submit" value="Entrar"></div>
        </div>
    </form>
	
	</div>
	
		<p class="regit">¿No estas registrado aún? Pulsa en Registro.</p>
        <button class="inptb" ><a href="registro.php">Registro</a></button>
        <button class="inptb"><a href="../index.php">Inicio</a></button>
		
	</div>
	</div>
	
	<footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='../index.php'>TravelandTime</a> | Copyright ©2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="../img/gorjeo.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="../img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="../img/facebook.png"></img></a>
		
			</div>
	
		</div>
	
	</footer>
	
    </body>
    </html>
    <?php

}else {
    $user=$_POST['user']; 
    $pass=$_POST['password'];
    include("../models/login.php");
  $comprobar=comprobar($user,$pass,$db);
    if($comprobar==true){
        $DNI=dni($db,$user);
       
        $_SESSION['user']=$DNI;
        $_SESSION['nombre']=$user;
        $chat=chat($user,$db);
    if ($chat) {
        $fp = fopen("../views/conectados.txt",'a');
        fwrite($fp, $user.PHP_EOL);
        fclose($fp);   
    }
    header("Location:../index.php");
}else {
    $value="Error al logearte vuelve a intentarlo";
    setcookie("login", $value, time()+5);
    header("Location:login.php");
}
}
}else{
    header("Location:../index.php");
}


?>