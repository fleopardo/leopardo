<?php session_start(); 
	if($_SESSION["login"] != true){
		header ("Location: login.php");
	}
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]><html lang="es" class="ie6"><![endif]-->
<!--[if IE 7 ]> <html lang="es" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="es" class="ie9"> <![endif]-->

<!--[if (gt IE 9)|!(IE)]> <!-->
<html lang="es"><!--<![endif]-->

<head>
	<title>CALPSA - Admin</title>
	<meta charset="utf-8" />
	<meta name="description" content=""> 
	<meta name="keywords" content=""> 
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="styles/global.css" />
</head>

<body id="contacto">
	
	<?php include("./includes/menu.php"); ?>
	
	<section>
		<h2>Contacto</h2>
		<form method="post" action="">
			<p>
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" class="text"/>
			</p>

			<p>
			<label for="direccion">Dirección:</label>
			<input type="text" id="direccion" name="direccion" class="text" />
			</p>

			<p>
			<label for="cp">Código postal:</label>
			<input type="text" id="cp" name="cp" class="text" />
			</p>

			<p>
			<label for="tel1">Telefono:</label>
			<input type="text" id="tel1" name="tel1" class="text" />
			</p>

			<p>
			<label for="tel2">Telefono 2:</label>
			<input type="text" id="tel2" name="tel2" class="text" />
			</p>

			<p>
			<label for="skype">Skype:</label>
			<input type="text" id="skype" name="skype" class="text" />
			</p>

		    <input type="submit" value="enviar" />
		</form>
	</section>
	
	<?php include("./includes/footer.php"); ?>
	
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>