<!DOCTYPE html>
<html lang="es">
<head>
    <title> Travel and Time - Inicio </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="estilos/index.css">
	
    
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
			<div class='menu'>
            <ul>
           <li><a href='index.php'>Inicio</a></li>
			<li><a href='controllers/quienessomos.php'>Quienes Somos</a></li>
          <li><a href='controllers/contactanos.php'>Contactanos</a></li>
           <li><a href='controllers/ayuda.php'>Ayuda</a></li>
           <?php
		   //Index
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <li><a href='controllers/login.php'>Login</a></li>";
            }else {
                echo " <li><a href='controllers/cerrarsession.php'>Cerrar Sesion</a></li>";
            }
           ?>
			</ul>
			</div>
            
        </nav>
    </div>
    <main>
        <section>
            
			<article>
	
	<div id="carrusel">
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
  
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/quemaravilla2.jpg" alt="First slide">
				
			</div>
			
			<div class="carousel-item">
				<img class="d-block w-100" src="img/quedatowenote2.jpg" alt="Second slide">
			</div>
    
			<div class="carousel-item">
				<img class="d-block w-100" src="img/viajeloko2.jpg" alt="Third slide">
			</div>
			
		</div>
		
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
  
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	
	</div>
	
	</div>
				
	
				
    <div id="Calendario">
					
	<h2 id="eligeviaje">¡ELIGE TU VIAJE SORPRESA!</h2>
					
	<div id="viaje3"><br>
					
    <form action="controllers/next.php" method="post">
	
         <a><p>¿Ciudad de Salida?</p></a> <input type="text" name="Salida" required>
		<br>
         <a><p>¿Numero de Integrantes?</p></a> <input type="number"  name="viajeros" required>
		 <a><p>¿Fecha de Salida?</p></a> <input type="date"  name="fechas" required>
        <br>
         <a><p>PACK</p></a>
		<select name="seleccion">
        <option>Low Cost</option>
        <option>Medium Cost</option>
        <option>High Cost</option>
        </select>
		<br><br>
		
        <input type="submit" value="GO NEXT">
		
    </form>
    
	</div>
					
    </div>
				
            </article>
			
        </section>
		
    </main>
	
    <footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por: Travel and Time - </p>
	
			<p> - Puede seguirnos en nuestras redes sociales - </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="img/twitter.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="img/facebook.jpg"></img></a>
		
			</div>
	
		</div>
	
	</footer>

</body>

</html>