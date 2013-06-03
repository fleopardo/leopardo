<?php include_once('config.php')?>

<?php
if(!empty($_POST))
{
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	$emailAdmin = "gonzalolocutor@hotmail.com";

	//Validations
	$return['status'] = 'ok';
	if(empty($name))
	{
		$return['errors'][] = 'name';
	}

	/*if(empty($email) || !ereg('^([a-zA-Z0-9\._]+)\@([a-zA-Z0-9\.-]+)\.([a-zA-Z]{2,4})$', $email))
	{
		$return['errors'][] = 'email';
	}*/

	if(empty($phone))
	{
		$return['errors'][] = 'phone';
	}

	if(empty($message))
	{
		$return['errors'][] = 'message';
	}

	if(!empty($return['errors']))
	{
		$return['status'] = 'error';
	}
	//

	if($return['status'] == 'ok'){

		//Header
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headers .= "From: ".$email."\r\n";

		$title = 'Gonzalo Heras Web';

		$content = "Nombre: ".$name."\n";
		$content .= "Email: ".$email."\n";
		$content .= "Mensaje: \n".$message."\n";
		mail($emailAdmin, $title, $content, $headers);


		//header Copy
		$headersCopy = "MIME-Version: 1.0\r\n";
		$headersCopy .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headersCopy .= "From: ".$emailAdmin."\r\n";

		$content = "¡Hola! Tu mensaje fue enviado con éxito a Gonzalo Heras Locutor. Muchas gracias por contactarte.\n";
		$content .= "Muy pronto vas a recibir.\n";
		$content .= "(Debajo verás una copia de tu mensaje)\n\n";
		$content .= "Nombre: ".$name."\n";
		$content .= "Email: ".$email."\n\n";
		$content .= "Mensaje: \n".$message."\n\n";

		mail($email, $title, $content, $headersCopy);
	}

	if(isset($_POST['javascript']))
	{
		echo json_encode($return);
		exit();
	}
	else
	{
		header('location: '.CONTACT_SLUG);
	}
}
else
{
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js"> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9"> <![endif]-->
<!--[if !IE ]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title>Gonzalo Heras</title>
		<meta name="description" content="Gonzalo heras, locutor comercial de radio y TV, conductor, periodista">
		<meta name="keywords" content="Gonzalo heras, locutor comercial de radio y TV, conductor, periodista">
		<?php include_once('includes/head.php'); ?>
	</head>
	<body>
		<!-- contact -->
		<div id="contact" class="section">
			<div class="wrapper">
				<header class="section-header">
					<h1><a href="index.php" title="Gonzalo Heras" class="logo"><span class="DN">Gonzalo Heras</span></a></h1>
				</header>
				<?php include_once('includes/menu.php')?>
				<section class="section-content">
					<img src="img/im_contacto-left.png" alt="" width="1136" height="458" />
					<div class="bg-rotated"></div>
					<form id="contact-form" method="POST" action="contact.php">
						<legend>Para contactarte conmigo completa este formulario.</legend>
						<fieldset>
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" placeholder="*Nombre..." />
							<label for="email">Nombre</label>
							<input type="text" name="email" id="email" placeholder="*Email..." />
							<label for="message">Nombre</label>
							<textarea name="message" id="message" placeholder="*Mensaje..."></textarea>
							<div class="rows">
								<input type="submit" value="Enviar" class="submit" />
								<span id="form-response"></span>
							</div>
						</fieldset>
					</form>
				</section>
				<?php include_once('includes/footer.php')?>
			</div>
		</div>
		<?php include_once('includes/close.php'); ?>
	</body>
</html>
<?php
}
?>