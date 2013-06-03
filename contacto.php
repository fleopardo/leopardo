<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$empresa = trim($_POST['empresa']);
	$telefono = trim($_POST['telefono']);
	$message = trim($_POST['message']);
	$emailAdmin = "info@leopardoagency.com";

	//Validations
	$return['status'] = 'ok';
	if(empty($name)){
		$return['errors'][] = 'name';
	}

	//if(empty($email) || !ereg('^([a-zA-Z0-9\._]+)\@([a-zA-Z0-9\.-]+)\.([a-zA-Z]{2,4})$', $email)){
	//	$return['errors'][] = 'email';
	//}

	if(empty($message)){
		$return['errors'][] = 'message';
	}

	if(!empty($return['errors'])){
		$return['status'] = 'error';
	}


	if($return['status'] == 'ok'){

		//Header
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headers .= "From: ".$email."\r\n";

		$title = 'Leopardoagency Web';

		$content = "Nombre: ".$name."\n";
		$content .= "Email: ".$email."\n";
		$content .= "Empresa: ".$empresa."\n";
		$content .= "Telefono: ".$telefono."\n";
		$content .= "Mensaje: \n".$message."\n";
		mail($emailAdmin, $title, $content, $headers);


		//header Copy
		$headersCopy = "MIME-Version: 1.0\r\n";
		$headersCopy .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headersCopy .= "From: ".$emailAdmin."\r\n";

		$content = "¡Hola! Tu mensaje fue enviado con éxito a Leopardo Agency. Muchas gracias por contactarte.\n";
		$content .= "Muy pronto vas a recibir una respuesta.\n";
		$content .= "(Debajo verás una copia de tu mensaje)\n\n";
		$content .= "Nombre: ".$name."\n";
		$content .= "Email: ".$email."\n";
		$content .= "Empresa: ".$empresa."\n";
		$content .= "Telefono: ".$telefono."\n\n";
		$content .= "Mensaje: \n".$message."\n\n";

		mail($email, $title, $content, $headersCopy);
	}

	echo json_encode($return);

	exit();

?>