<?php 
	session_start(); 
	if($_SESSION["login"] != true){
		header ("Location: login.php");
	}else{
		require("conexion.php");
		$link = Conectarse();
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

<body>
	
	<?php include("./includes/menu.php"); ?>

	<section>
	<?php
	//Guardo las variables que recibo
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	
	//Mensajes de error y exito
	$msgError = "<p class='error'>Ha ocurrido un error. Intenta de nuevo.</p>";
	$msgExito = "<p class='exito'>Su peticion fue realizada exitosamente.</p>";

	//hago el insert
	$Sql = "update categories set nombre='$nombre', descripcion='$descripcion' WHERE id=$id";
	mysql_query($Sql,$link);
	if (mysql_errno()){
		$error = true;
	}
	
	
	if ($error == true){
		echo $msgError;
	} else{
		echo $msgExito;
	}

	?>
	<a href="categorias.php">Volver</a>
	</section>

	<?php include("./includes/footer.php"); ?>
</body>
</html>