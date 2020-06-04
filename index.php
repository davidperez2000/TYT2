<!DOCTYPE html>
<html lang="es">
<head>
    <title> Travel and Time - Inicio </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="estilos/index.css">
	
    
</head>

<body>
	
	<div id="todo">
	
    <div class="hed">
      
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href='index.php'><img src="img/travel.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		<a class="nav-item active" href='index.php'>Inicio <span class="sr-only">(current)</span></a>
		<a class="nav-item" href='controllers/viajes.php'>Los Viajes</a>
		<a class="nav-item" href='controllers/contactanos.php'>Contactanos</a>
		<a class="nav-item" href='controllers/ayuda.php'>Ayuda</a>
		 <?php
		   //Index
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <a class='nav-item' href='controllers/login.php'>Login</a>";
            }else {
                echo " <a class='nav-item' href='controllers/cerrarsession.php'>Cerrar Sesion</a>";
            }
           ?>
		
		
		</div>
		</div>
		</nav>
		
    </div>
	
    <main>
	
        <section>
            
			<article>
			
    <div id="Calendario">
					
	<h2 id="eligeviaje">¡ELIGE TU VIAJE!</h2></button>
					
	<div id="viaje3"><br>
					
    <form action="controllers/next.php" method="post">
	
         <a><p>¿Ciudad de Salida?</p></a> <input class="inpt" type="text" name="Salida" required>
		<br> <br>
         <a><p>¿Numero de Integrantes?</p></a> <input class="inpt" type="number"  name="viajeros" required>
		<br> <br>
		 <a><p>¿Fecha de Salida?</p></a> <input class="inpt" type="date"  name="fechas" required>
        <br> <br>
         <a><p>PACK</p></a>
		<select class="inpt" name="seleccion">
        <option>Low Cost</option>
        <option>Medium Cost</option>
        <option>High Cost</option>
        </select>
		<br><br>
		
        <input class="inpt" type="submit" value="ELEGIR VIAJE">
		
		<br><br>
		
		<h6 class="po">¿No sabes qué elegir? Consulta nuestro catálogo de viajes <a class="btn btn-warning" href='controllers/viajes.php'>CATALOGO DE VIAJES</a></h6>
		
    </form>
    
	</div>
					
    </div>
				
            </article>
			
        </section>
		
    </main>
	
    <footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='index.php'>TravelandTime</a> | Copyright ©2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="img/gorjeo.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="img/facebook.png"></img></a>
		
			</div>
	
		</div>
	
	</footer>
	
	</div>
	
</body>

</html>