<!DOCTYPE html>
<html lang="es">

<head>
    <title> Travel and Time - Ayuda </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/ayuda.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="../js/chat.js"></script>
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
		
			<div class='menu'>
				<ul><li><a href='../index.php'>Inicio</a></li>
				<li><a href='quienessomos.php'>Quienes Somos</a></li>
                <li><a href='contactanos.php'>Contactanos</a></li>
                <?php
            include("../db/conexion.php");
            session_start();
            require_once("../models/ayuda.php");
           if(!isset($_SESSION['user'])){
                echo " <li><a href='login.php'>Login</a></li>";
            }else {
                echo " <li><a href='cerrarsession.php'>Cerrar Sesion</a></li>";
            }
           ?>
			</ul>
			</div>
		
        </nav>
    </div>
    <main>
        <section>
            <article>
                <div id="Ayuda">
                <?php
if(!isset($_SESSION['user'])){
  echo "<button><a href='login.php'>Logeate para hablar en el chat</a></button>";  
}
else{
    $booleanban=comprobarchat($_SESSION['user'],$db);
  if ($booleanban==false) {
    echo "<p style='font-size:20px;top:100px;position:relative;'> NO PUEDES ACCEDER AL CHAT POR BAN </p>";
    echo "Lo siento esta usted baneado";
}else {
?>
    <div id="Bienvenido">
	
        <p class="Bienvenido">Bienvenido, <b><?php echo $_SESSION['nombre']; ?></b></p>
		
        <div></div>
		
    </div>    
	
    <div id="chat">
	
	</div>
	
    <div id="form">
	
		<form name="mensaje" action="">
			<input name="msg" type="text" id="msg" />
			<input name="enviar" type="submit"  id="enviar" value="enviar" />
		</form>
	
	</div>
	
<div id="conectados" style="color:black;"></div>
<?php
}
$users=obtenerusuarios($db);
require_once("../views/ayuda.php");
}
?>
<script type="text/javascript">
    $("#enviar").click(function(){	
        var mensaje = $("#msg").val();
        if(mensaje!=""){
        $.post("../models/chat.php", {msg: mensaje});	
        }			
		$("#msg").attr("value", "");
		return false;
    });
    $("#ban").click(function(){	
        var usuario = $("#nombre").val();
        if(usuario!=""){
        $.post("../models/chat.php", {nom: usuario});	
        }			
    });

</script>
                </div>
            </article>
        </section>
    </main>
    <footer>

    </footer>

</body>

</html>