<?php

	$name = trim($_POST['name']);
	$apellido = trim($_POST['apellido']);
	$email = trim($_POST['email']);
	$telefono = trim($_POST['telefono']);
	$consulta = trim($_POST['consulta']);
	$destinatario = trim($_POST['destinatario']);

	//defino el mail de destinatario
	//En el HTML se debe definir el value
	//EJEMPLO: <option value="fernando">Fernando Leopardo</option>

	switch ($destinatario){

	case 'central':
	  $emailAdmin = "asis-tec@asis-tecweb.com";
	  break;
	case 'ventas':
	  $emailAdmin = "ventas@asis-tecweb.com";
	  break;
	}

	$return["email"] = $emailAdmin;

	//Validations
	$return['status'] = 'ok';
	if(empty($name)){
		$return['errors'][] = 'name';
	}

	if(empty($apellido)){
		$return['errors'][] = 'name';
	}

	if(empty($consulta)){
		$return['errors'][] = 'consulta';
	}

	if(!empty($return['errors'])){
		$return['status'] = 'error';
	}


	if($return['status'] == 'ok'){

		//Header
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headers .= "From: ".$email."\r\n";

		$title = '[CONSULTA] - Asis-Tec Web';

		$content = "Nombre: ".$name."\n";
		$content .= "Apellido: ".$apellido."\n";
		$content .= "Email: ".$email."\n";
		$content .= "Telefono: ".$telefono."\n";
		$content .= "Mensaje: \n".$consulta."\n";

		mail($emailAdmin, $title, $content, $headers);


		//header Copy
		$headersCopy = "MIME-Version: 1.0\r\n";
		$headersCopy .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headersCopy .= "From: ".$emailAdmin."\r\n";

		$content = "¡Hola! Tu mensaje fue enviado con éxito a Asis-Tec. Muchas gracias por contactarte.\n";
		$content .= "Muy pronto vas a recibir una respuesta.\n";
		$content .= "(Debajo verás una copia de tu mensaje)\n\n";
		$content .= "Nombre: ".$name."\n";
		$content .= "Apellido: ".$apellido."\n";
		$content .= "Email: ".$email."\n";
		$content .= "Telefono: ".$telefono."\n";
		$content .= "Mensaje: \n".$consulta."\n";

		mail($email, $title, $content, $headersCopy);
	}

	echo json_encode($return);

	exit();

?>