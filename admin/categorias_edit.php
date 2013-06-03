<?php session_start(); 
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

<body id="empresa">
	
	<?php include("./includes/menu.php"); ?>
	
	

	<?php
		$id = $_GET["id"];
		$query = mysql_query("SELECT * FROM categories WHERE id=$id",$link);
		$result = mysql_fetch_array($query, MYSQL_ASSOC);
	?>

	<section>
		
			<h2>Editar categoria <?= $result["nombre"];?></h2>
			
			<form action="./categorias_edit_post.php" method="post">
				<fieldset>

					<input type="hidden" id="id" name="id" value="<?= $result['id'];?>" /></p>

					<p><label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" class="text" value="<?= $result['nombre'];?>" /></p>

					<p><label for="descripcion">Descripcion:</label><br />
					<textarea id="descripcion" name="descripcion"><?= $result['descripcion'];?></textarea></p>
					
					<input type="submit" value="Guardar cambios"/>

				</fieldset>
			</form>
		
		
	</section>
	
	<?php include("./includes/footer.php"); ?>
	
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>