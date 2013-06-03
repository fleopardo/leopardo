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
	<script src="scripts/jquery.js" type="text/javascript"></script>
	<script src="scripts/scripts.js" type="text/javascript"></script>
</head>

<body>
	
	<?php include("./includes/menu.php"); ?>

	<section>

		<?php

			$nombreCliente = $_POST["nombre"];

			if($_FILES["foto"]["name"] != "" && $nombreCliente != ""){
				
					//En esta variable estaran todos los posibles errores para mostrarlos.
					$msgError = "";
					
					///OK
					if (($_FILES["foto"]["type"] == "image/png") || ($_FILES["foto".$i.""]["type"] == "image/gif") || ($_FILES["foto".$i.""]["type"] == "image/jpeg") || ($_FILES["foto".$i.""]["type"] == "image/pjpeg") ){
					  
					  if ($_FILES["foto"]["error"] > 0){
						$msgError .= "<p class='error'>Codigo de Error: " . $_FILES["foto"]["error"]."<p>";
					  }else{
						/* if (file_exists("fotos/" . $_FILES["foto".$i.""]["name"])){
							$msgError .= "<p class='error'>".$_FILES["foto".$i.""]["name"] . " ya existe.</p>";
						} */
					  }

					}else{
						$msgError .= "<p class='error'>El archivo debe ser una imagen. Utilice archivos con extensiones jpg, png o gif</p>";
					}
					///OK
					
					//OKKK
					//Si no hubo errores hago el upload al servidor y el insert en la base de datos, de lo contrario, muestro el error en pantalla.
					if($msgError == ""){
						//posibles errores de subida se graban en esta variable
						$errorUpload = "";

						$extension = substr($_FILES["foto"]['name'], strrpos($_FILES["foto"]['name'],'.'));
						$uniqueId = uniqid();
						
						$imagen = $uniqueId."".$extension;
						
						move_uploaded_file($_FILES["foto"]["tmp_name"],
						"../fotos-clientes/" . $imagen);
						
						if (file_exists("../fotos-clientes/" . $imagen)){
							
							$sql = "
								INSERT INTO clients (nombre,imagen)
								VALUES ('$nombreCliente','$imagen')
							";
							
							$query = mysql_query($sql,$link);
							
							if( $query ){
								$msgErrorDB = "";
							}else{
								$msgErrorDB = "<p class='error'>Intente nuevamente. No se pudo grabar en la base de datos. </p>";
							}
							
						}else{
							$errorUpload = "<p class='error'>Intente nuevamente. La imagen no se guardo correctamente.</p>";
						}
					}
					//OKKKK

					if($msgErrorDB != "" & $errorUpload != ""){
						echo $msgErrorDB;
						echo $errorUpload;
						
					}else{
						echo "<p class='exito'>Las imagenes se han guardado con exito.</p>";
						
					}

				}else{
					
					echo "<p class='error'>No ingresaste el nombre y/o imagen del cliente</p>";
					
				}

				
		?>

		<a href="clientes.php">Volver</a>
	</section>

	<?php include("./includes/footer.php"); ?>

</body>
</html>