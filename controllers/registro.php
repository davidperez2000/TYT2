<?php
include("../db/conexion.php");
if (!isset($_POST) || empty($_POST)) { 
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel and Time</title>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
		<link rel="stylesheet" href="../estilos/index.css">
		<link rel="stylesheet" href="../estilos/registro.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
        <script>
	
		$(function() {
			$(document).tooltip();
		});
		);
		
		</script>
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
	
	<div id="contton">
	
	<h1>REGISTRO</h1>
	
	
	
			</br>
	
    <form action="" method="post">
	
    <div id="reg1">
	
			<p>¡Regístrate y forma parte de nuestros aventureros!</p>
	
			</br>
	
            <div>
            <p>Usuario</p><input class="inpt" type="text" title="Introduzca su nombre de usuario" name="user" required>
            </div>
			</br>
            <div>
            <p>Password</p> <input class="inpt" type="text" title="Introduzca su Futura Contraseña" name="pass" required>
            </div>
			</BR>
            <div>
            <p>Nombre</p> <input class="inpt" type="text" title="Introduzca su nombre " name="nombre" required>
            </div>
			</br>
            <div>
            <p>Apellido</p> <input class="inpt" type="text" title="Introduzca su apellido" name="apellido1" required>
            </div>
			</br>
            <div>
            <p>DNI</p> <input class="inpt" type="text" name="dni" title="Introduzca su Dni Correctamente" pattern="[0-9]{8}[A-Z]$" required>
            </div>
			</br>
            <div>
            <p>Direccion</p> <input class="inpt" type="text"  title="Introduzca su Direccion" name="direccion" required>
            </div>
			</br>
            <div>
            <p>Email</p> <input class="inpt" type="mail" title="Introduzca su Email" name="email" required>
            </div>
			</br>
            <div>
            <p>Fecha Nacimiento</p> <input class="inpt" type="date" title="Introduzca su Fecha de Nacimiento" name="fecha" id="fecha"  required>
            </div>
			</br>
            <div>
            <p>Codigo Postal</p> <input class="inpt" type="text" title="Introduzca su Codigo Postal" name="cp" id="cp"  required>
            </div>
            </BR></BR>
	
        <div><input class="inpb" type="submit" value="Registrarse"></div>
		
		 </BR></BR>
		
		<button class="ipt"><a href="login.php">Login</a></button>
        <button class="ipt"><a href="../index.php">Inicio</a></button>
		
	</div>

	</form>

	</div>
	
	<footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='index.php'>TravelandTime</a> | Copyright ©2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="../img/gorjeo.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="../img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="../img/facebook.png"></img></a>
		
			</div>
	
		</div>
	
	</footer>

	</div>

    </body>
	
    </html>
    <?php
}else {
    $user=$_POST['user']; 
    $pass=$_POST['pass'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido1'];
    $DNI=$_POST['dni'];
    $Direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $fecha=$_POST['fecha'];
    $cp=$_POST['cp'];
    session_start();
    include("../models/registro.php");
      $resul=registrar($user,$pass,$nombre,$apellido,$DNI,$Direccion,$email,$fecha,$cp,$db);
      if ($resul==true) {
        $_SESSION['user']=$DNI;
        $_SESSION['nombre']=$user;
	$subject="Travel and time Registro ";
	$body="Su usuario ha sido registrado ";
	requiere("correo.php");
      }else {
        eliminarerror($DNI,$db);
	requiere("registro.php");
      }  
}


?>

