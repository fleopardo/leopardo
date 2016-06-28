<?php

	$asunto = "Contacto Web HOSEPOWER";

	//recopilo datos
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $empresa = $_POST["empresa"];
	$consulta = $_POST["consulta"];

	//Destinatario
	// $para = "ventas@hosepower.com.ar";
	$para = "santiagoleopardo@gmail.com";

	//armo el mensaje
	$datos = "Nombre: ".$nombre." ".$apellido;
	$datos .= "\n";
	$datos .= "Email: ".$email;
    $datos .= "\n";
	$datos .= "Telefono: ".$telefono;
    $datos .= "\n";
	$datos .= "Ciudad: ".ciudad;
    $datos .= "\n";
	$datos .= "Empresa: ".ciudad;
    $datos .= "\n\n";
	$datos .= "Mensaje:\n".$consulta;

	//Header
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headers .= "From: ".$email."\r\n";

	//header Copy
	$headersCopy = "MIME-Version: 1.0\r\n";
	$headersCopy .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headersCopy .= "From: noreply@hosepower.com.ar \r\n";


	//verifico que el mail se haya enviado con exito
	if(mail("$para", "$asunto", "$datos", "$headers")){
		$mensaje['success']=true;
	}else{
		$mensaje['success']=false;
	}

	//devuelvo mensaje, para saber si fue true o false
	if(!function_exists('json_encode'))
	{
		include_once('includes/JSON.php');
		$GLOBALS['JSON_OBJECT'] = new Services_JSON();
		function json_encode($value)
		{
			return $GLOBALS['JSON_OBJECT']->encode($value);
		}

		function json_decode($value)
		{
			return $GLOBALS['JSON_OBJECT']->decode($value);
		}
	}

	echo json_encode($mensaje);

?>
