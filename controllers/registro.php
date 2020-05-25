
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
		<link rel="stylesheet" href="../estilos/bootstrap.min.css">
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
	
    <h1>REGISTRO</h1>
	
	</br>
	
    <form action="" method="post">
	
    <div id="reg1">
	
            <div>
            <p>Nombre de usuario</p><input type="text" title="Introduzca su nombre de usuario" name="user" placeholder="user" required>
            </div>
			</br>
            <div>
            <p>Password</p> <input type="text" title="Introduzca su Futura Contraseña" name="pass" placeholder="password" required>
            </div>
			</BR>
            <div>
            <p>Nombre</p> <input type="text" title="Introduzca su nombre " name="nombre" placeholder="Nombre" required>
            </div>
			</br>
            <div>
            <p>Apellido 1</p> <input type="text" title="Introduzca su apellido" name="apellido1" placeholder="Apellido1" required>
            </div>
			</br>
            <div>
            <p>DNI</p> <input type="text" name="dni" title="Introduzca su Dni Correctamente" placeholder="dni" pattern="[0-9]{8}[A-Z]$" required>
            </div>
	
	</div>
	
	<div id="reg2">
	
            <div>
            <p>Direccion</p> <input type="text"  title="Introduzca su Direccion" name="direccion" placeholder="direccion" required>
            </div>
			</br>
            <div>
            <p>Email</p> <input type="mail" title="Introduzca su Email" name="email" placeholder="Email" required>
            </div>
			</br>
            <div>
            <p>Fecha Nacimiento</p> <input type="date" title="Introduzca su Fecha de Nacimiento" name="fecha" placeholder="Fecha Nacimiento" id="fecha"  required>
            </div>
			</br>
            <div>
            <p>Codigo Postal</p> <input type="text" title="Introduzca su Codigo Postal" name="cp" placeholder="Codigo Postal" id="cp"  required>
            </div>
            </BR>
			
    </div>
	

	
	<div id="reg3">
	
        <div><input type="submit" value="Enviar"></div>
		
		 </BR>
		
		<button><a href="login.php">Login</a></button>
        <button><a href="../index.php">Inicio</a></button>
		
	</div>
		
</form>
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

