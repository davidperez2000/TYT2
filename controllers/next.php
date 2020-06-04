<?php
session_start();
if(!isset($_SESSION['user'])){
    $value="Para continuar y comprar tu viaje logeate";
    setcookie("login", $value, time()+5);
                header("Location:login.php");
            }else {
                $pack=$_POST['seleccion'];
                $viajeros=$_POST['viajeros'];
                $salida=$_POST['Salida'];
                $fecha=$_POST['fechas'];
                $pago="";
                $_SESSION['compra'][]=array();
                $_SESSION['compra']['viajeros']=$viajeros;
                $_SESSION['compra']['salida']=$salida;
                $_SESSION['compra']['fecha']=$fecha;
                if ($pack=="Low Cost") {
                  $pago=500*$viajeros;
                  $_SESSION['compra']['pago']=$pago;
                }
                elseif ($pack=="Medium Cost") {
                  $pago=750*$viajeros;
                  $_SESSION['compra']['pago']=$pago;
                }
                elseif ($pack=="High Cost") {
                  $pago=1000*$viajeros;
                  $_SESSION['compra']['pago']=$pago;
                }
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
	<link rel="stylesheet" href="../estilos/next.css">
		
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
	
	<div id="next1">
	
    <h1>¡ELIGE TU DESTINO!</h1>

	</div>
	
	<div id="next2">
	
	<div id="contnext2">
	
    <form id="" name="" action="../tpv/tpv.php" method="post" onsubmit="return verificar();" class="card-body">
    <?php
    echo "<h2>PACK ELEGIDO: ".$pack."</h2>";
	
    echo "<br>";
	
    echo "<a> Selecciona tu destino: </a>";
		
               if ($pack=="Low Cost") {
                echo "<select class='inpt' name='destino'>
    <option>Oporto</option>
    <option>Burgos</option>
    <option>Malaga</option>
    </select>
	</br>
	</br>
    <p>Elige 2 opciones:</p> 
    <div>
    <input type='checkbox' id='guia' name='opti[]' value='guia'>
    <label for='guia'>Guia</label>
  </div>
  <div>
    <input type='checkbox' id='pension' name='opti[]' value='pension completa'>
    <label for='pension'>Pension Completa</label>
  </div>
  <div>
  <input type='checkbox' id='lugares' name='opti[]' value='lugares emblematicos'>
  <label for='lugares'>Lugares Emblemáticos</label>
</div>
<div>
<input type='checkbox' id='spa' name='opti[]' value='spa'>
<label for='spa'>SPA</label>
</div>";


                }elseif ($pack=="Medium Cost") {
                    echo " <select class='inpt' name='destino'>
    <option>Venecia</option>
    <option>Atenas</option>
    <option>Reikiavik</option>
    </select>
	</br>
	</br>
    <p>Elige 3 opciones </p>
    <div>
    <input type='checkbox' id='guia' name='opti[]' value='guia'>
    <label for='guia'>Guia</label>
  </div>
  <div>
    <input type='checkbox' id='pension' name='opti[]' value='pension completa'>
    <label for='pension'>Pension Completa</label>
  </div>
  <div>
  <input type='checkbox' id='lugares' name='opti[]' value='lugares emblematicos'>
  <label for='lugares'>Lugares Emblemáticos</label>
</div>
<div>
<input type='checkbox' id='spa' name='opti[]' value='spa'>
<label for='spa'>SPA</label>
</div>";
                }
                elseif ($pack=="High Cost") {
                    echo "<select class='inpt' name='destino'>
        <option>Oslo</option>
        <option>Moscu</option>
        <option>Berlin</option>
        </select> </br>";
		echo "</br>";
        echo "<p>-Incluido en su paquete-</p> 
    <p>Guia turistica por la ciudad</p><p>Pensión completa</p><p>Visita a lugares emblemáticos</p><p>Spa</p>";
                }
               
            }
            echo"PRECIO = ". $pago ."€";

            ?>
			
			</br></br>
            
            <input type="submit" class='fininpt' value="Finalizar Compra">
             
             <script type="text/javascript">
			 
var pack =  "<?php echo $pack; ?>" ;
function verificar(){
var suma = 0;
var opti="";
var verdad = true;
var check = document.getElementsByName('opti[]'); 
for (var i = 0, j = check.length; i < j; i++) {
    if(check[i].checked == true){
    suma++;
    }
}
if(pack=="Low Cost"){
if(suma < 2){
alert('Debes seleccionar minimo 2 opciones');
verdad = false;
}else if (suma > 2 ) {
  alert('Debes seleccionar maximo 2 opciones');
  verdad = false;
}
}else if(pack=="Medium Cost") {
  if(suma < 3){
alert('Debes seleccionar minimo 3 opciones');
verdad = false;
}else if (suma > 3 ) {
  alert('Debes seleccionar maximo 3 opciones');
  verdad = false;
}
}
return verdad;
}
</script>


</form>

</div>

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
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			