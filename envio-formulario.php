<?php

	$asunto = "Contacto Web HOSEPOWER";

	//recopilo datos
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
    $telefono = $_POST["telefono"];
	$consulta = $_POST["consulta"];

	if ($_POST["section"] == 'contact') {
		$apellido = $_POST["apellido"];
	    $ciudad = $_POST["ciudad"];
	    $empresa = $_POST["empresa"];
	}

	//Destinatario
	// $para = "ventas@hosepower.com.ar";
	$para = "santiagoleopardo@gmail.com";

	//armo el mensaje
	if ($_POST["section"] === 'contact') {
		$datos = "Nombre: ".$nombre;
		$datos .= "\n";
		$datos = "Apellido: ".$apellido;
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
	}

	if ($_POST["section"] === 'home') {
		$datos = "Nombre: ".$nombre;
		$datos .= "\n";
		$datos .= "Email: ".$email;
	    $datos .= "\n";
		$datos .= "Telefono: ".$telefono;
	    $datos .= "\n\n";
		$datos .= "Mensaje:\n".$consulta;
	}

	//Header
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headers .= 'From:' . $email . "\r\n";
	$headers .= "Reply-To: " . $email . "\r\n";
	$headers .= "Return-path: " . $email;

	//verifico que el mail se haya enviado con exito
	if( mail("$para", "$asunto", "$datos", "$headers") ){
		$mensaje['success']=true;
	}else{
		$mensaje['success']=false;
	}

	echo json_encode($mensaje);

?>
