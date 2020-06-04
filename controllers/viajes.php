<!DOCTYPE html>
<html lang="es">

<head>
    <title> Travel and Time - Viajes </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/viajes.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	
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
		   //Index
           session_start();
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
	
    <main>
	
        <section>
		
            <article>
			
			<div id="catalogo">
				
				<h3>Viajes Disponibles</h3>
				
				<p>A continuación, podrá ver los viajes disponibles. Cada Pack contiene tres viajes y cuatro opciones a su elección.</p>
				
				<p>¡Elija el que más le guste!</p>
				
				<h5>Pack Low Cost</h5>
				
				<p>Este pack contiene tres viajes disponibles: Oporto, Burgos, Málaga.</p>
				
				<div id="low">
					
					<img id="imag" src="../img/oporto.jpg">
					
					<img id="imag" src="../img/burgos.jpg">
					
					<img id="imag" src="../img/malaga.jpg">
					
				</div>
				
				<p>Podrá elegir dos de las siguientes opciones: Guía, Pensión Completa, Lugares Emblemáticos, Spa.</p>
				
				<h5>Pack Medium Cost</h5>
				
				<p>Este pack contiene 3 viajes disponibles: Venecia, Atenas, Reykjavik.</p>
				
				<div id="medium">
					
					<img id="imag" src="../img/venecia.jpg">
					
					<img id="imag" src="../img/atenas.jpg">
					
					<img id="imag" src="../img/reikjavik.jpg">
					
				</div>
				
				<p>Podrá elegir tres de las siguientes opciones: Guía, Pensión Completa, Lugares Emblemáticos, Spa.</p>
				
				<h5>Pack High Cost</h5>
				
				<p>Este pack contiene 3 viajes disponibles: Oslo, Moscú, Berlin.</p>
				
				<div id="high">
					
					<img id="imag" src="../img/olso.jpg">
					
					<img id="imag" src="../img/moscu.jpg">
					
					<img id="imag" src="../img/berlin.jpg">
					
				</div>
				
				<p>Incluidas todas las opciones disponibles: Guía, Pensión Completa, Lugares Emblemáticos, Spa.</p>
			
			</div>
               
            </article>
			
        </section>
		
    </main>
	
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
	
</body>

</html>