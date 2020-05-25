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
		<link rel="stylesheet" href="../estilos/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos/index.css">
		<link rel="stylesheet" href="../estilos/next.css">
		
    </head>
    <body>
	
	<div id="next1">
	
    <h1>ELIGE TU DESTINO</h1>

	</div>
	
	<div id="next2">
	
	<div id="contnext2">
	
    <form id="" name="" action="../tpv/tpv.php" method="post" onsubmit="return verificar();" class="card-body">
    <?php
    echo "<h2>PACK ELEGIDO: ".$pack."</h2>";
	
    echo "<br>";
	
    echo "<a> Selecciona tu destino: </a>";
		
               if ($pack=="Low Cost") {
                echo "<select name='destino'>
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
                    echo " <select name='destino'>
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
                    echo "<select name='destino'>
        <option>Oslo</option>
        <option>Moscu</option>
        <option>Berlin</option>
        </select> </br>";
		echo "</br>";
        echo "<p>-Incluido en su paquete-</p> 
    <p>Guia turistica por la ciudad</p><p>Pensión completa</p><p>Visita a lugares emblemáticos</p><p>Spa</p>";
                }
               
            }
            echo"Precio = ". $pago;

            ?>
			
			</br>
            
            <input type="submit" value="Finalizar Compra">
             
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
alert('debes seleccionar minimo 2 viajes');
verdad = false;
}else if (suma > 2 ) {
  alert('debes seleccionar maximo 2 viajes');
  verdad = false;
}
}else if(pack=="Medium Cost") {
  if(suma < 3){
alert('debes seleccionar minimo 3 viajes');
verdad = false;
}else if (suma > 3 ) {
  alert('debes seleccionar maximo 3 viajes');
  verdad = false;
}
}
return verdad;
}
</script>


</form>

</div>

</div>
			
</body>

</html>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			