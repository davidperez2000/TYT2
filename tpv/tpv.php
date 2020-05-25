<?php

	// Se incluye la librería
	include 'apiRedsys.php';
	// Se crea Objeto
	$miObj = new RedsysAPI;
	session_start();
	$destino=$_POST['destino'];
	$_SESSION['compra']['destino']=$destino;
	// Valores de entrada que no hemos cmbiado para ningun ejemplo
	$fuc="999008881";
	$name="Travel and  Time";
	$terminal="1";
	$moneda="978";
	$trans="0";
	$url="";
	$urlOKKO="http://localhost/tyt2/controllers/comprar.php";
	$urlKO="http://localhost/tyt2/index.php";
	$id=time();
	$amount=$_SESSION['compra']['pago'];
	// Se Rellenan los campos
	$num=$amount."00";
	$num=intval($num);
	$miObj->setParameter("DS_MERCHANT_AMOUNT",$num);
	$miObj->setParameter("DS_MERCHANT_ORDER",$id);
	$miObj->setParameter("DS_MERCHANT_MERCHANTCODE",$fuc);
	$miObj->setParameter("DS_MERCHANT_CURRENCY",$moneda);
	$miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$trans);
	$miObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
	$miObj->setParameter("DS_MERCHANT_MERCHANTURL",$url);
	$miObj->setParameter("DS_MERCHANT_MERCHANTNAME",$name);
	$miObj->setParameter("DS_MERCHANT_URLOK",$urlOKKO);
	$miObj->setParameter("DS_MERCHANT_URLKO",$urlKO);
	//Datos de configuración
	$version="HMAC_SHA256_V1";
	$kc = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';//Clave recuperada de CANALES
	// Se generan los parámetros de la petición
	$request = "";
	$params = $miObj->createMerchantParameters();
	$signature = $miObj->createMerchantSignature($kc);


?>
<html lang="es">
<head>
<link rel="stylesheet" href="../estilos/index.css">
<link rel="stylesheet" href="../estilos/tpv.css">
</head>
<body>

<div id="tpv1">

<form name="frm" action="https://sis-t.redsys.es:25443/sis/realizarPago" method="POST" >
<h1>IMPORTE A PAGAR</h1> <?php echo $amount." Eur." ?><br>

</div>

<div id="tpv2">

<input type="submit" value="Terminar compra" > 
<input type="text" name="Ds_SignatureVersion" value="<?php echo $version; ?>" hidden /></br>
<input type="text" name="Ds_MerchantParameters" value="<?php echo $params; ?>" hidden/></br>
<input type="text" name="Ds_Signature" value="<?php echo $signature; ?>" hidden/></br>

</div>

</form>



</body>
</html>
