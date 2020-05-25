<!DOCTYPE html>
<html lang="es">

<head>
    <title> Travel and Time - Quienes somos </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/quienessomos.css">
	
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
           <div class='menu'>
           <ul><li><a href='../index.php'>Inicio</a></li>
           <li><a href='contactanos.php'>Contactanos</a></li>
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
                <div id="Quienes">
                    <br>
                    <p>Muy buenas a tod@s.</p>
					<p>Os damos la bienvenida a nuestro proyecto final de curso. Somos David Pérez y Fco.Javier Escudero, dos alumnos del Grado Superior de Desarrollo de Aplicaciones Web. Espero que disfrutéis de esta nuestra página web, y valoréis el esfuerzo y dedicación aportados. </p>
					
                </div>
            </article>
        </section>
    </main>
    <footer>

    </footer>

</body>

</html>