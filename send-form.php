<?php

	require('phpmailer/PHPMailerAutoload.php');

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

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "smtp.gmail.com";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "fleopardo@gmail.com";  // SMTP username
	$mail->Password = "santiaguito84"; // SMTP password

	$mail->From = $_POST["email"];
	$mail->FromName = $_POST["nombre"];
	/*$mail->AddAddress("josh@example.net", "Josh Adams");
	$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("info@example.com", "Information");*/

    $mail -> SMTPDebug = 2;
    $mail -> Debugoutput = 'html';
    $mail -> Port = 587;
    $mail -> SMTPSecure = 'tls';
    $mail -> addAddress('fleopardo@gmail.com', 'Test');
    $mail -> addReplyTo($email, 'Test2');

	/*$mail->WordWrap = 50;                                // set word wrap to 50 characters
	$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name*/
	$mail->IsHTML(false);                                  // set email format to HTML

	$mail->Subject = "Contacto Web HOSEPOWER";

	if ($_POST["section"] === 'contact') {
		$datos = "Nombre: ".$nombre;
		$datos .= "\n";
		$datos = "Apellido: ".$apellido;
		$datos .= "\n";
		$datos .= "Email: ".$email;
	    $datos .= "\n";
		$datos .= "Telefono: ".$telefono;
	    $datos .= "\n";
		$datos .= "Ciudad: ".$ciudad;
	    $datos .= "\n";
		$datos .= "Empresa: ".$empresa;
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

	$mail->Body    = $datos;
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	//Header
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headers .= 'From:' . $email . "\r\n";
	$headers .= "Reply-To: " . $email . "\r\n";
	$headers .= "Return-path: " . $email;

    $mensaje = array();
	$mensaje['success']=true;

	if(!$mail->Send())
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;

	   $mensaje['mensaje']="Mailer Error: " . $mail->ErrorInfo;;
	   $mensaje['success']=false;

	   exit;
	}

	echo json_encode($mensaje);


?>
