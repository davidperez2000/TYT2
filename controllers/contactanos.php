<!DOCTYPE html>
<html lang="es">
<head>

    <title> Travel and Time - Contactanos </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/contactanos.css">
	
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
			
				<div id="info">
				
					<div>
				
						<p>🌴🌴 Telefono de Contacto: 600000000 🌴🌴 </p>
						<p>🌴🌴 Email: travelandtime@gmail.com 🌴🌴</p>
						
					</div>
				
				</div>
			
                <div id="Contactanos">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12157.588797534801!2d-3.7640795!3d40.3778886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e27f9f907f91d18!2sIES%20Leonardo%20Da%20Vinci!5e0!3m2!1ses!2ses!4v1581582361847!5m2!1ses!2ses"
                 width="450px" height="400px" ></iframe>
           
                </div>
            
            </article>
        </section>
    </main>
	
    <footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='index.php'>TravelandTime</a> | Copyright �2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
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