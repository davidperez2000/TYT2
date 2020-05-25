<!DOCTYPE html>
<html lang="es">
<head>

    <title> Travel and Time - Contactanos </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/contactanos.css">
	
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
            <li><a href='ayuda.php'>Ayuda</a></li>
            <?php
           session_start();
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
				
		<div id="redes">
		
		<a href="https://twitter.com/" target="_blank"><img src="../img/twitter.png"></img></a>
		<a href="https://instagram.com/" target="_blank"><img src="../img/instagram.png"></img></a>
		<a href="https://facebook.com/" target="_blank"><img src="../img/facebook.jpg"></img></a>
		
		</div>
            
            </article>
        </section>
    </main>
	
    <footer >
	
    </footer>

</body>

</html>