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
			
			$id = $_GET["id"];

			$query = mysql_query("SELECT * FROM products WHERE id=$id",$link);
			$result = mysql_fetch_array($query, MYSQL_ASSOC);

			$nombre = $result["nombre"];
			
			if($query = mysql_query("DELETE FROM products WHERE id = $id",$link)){
				?>
					<p class="exito">El producto "<?= $nombre ?>" se ha borrado con exito</p>
				<?php
			}else{
				?>
					<p class="error">El producto "<?= $nombre ?>" no se pudo borrar, intenta nuevamente.</p>
				<?php
			};

			$query2 = mysql_query("DELETE FROM products WHERE categ_id = $id",$link);
			
		?>

		<a href="productos.php">Volver</a>
	</section>

	<?php include("./includes/footer.php"); ?>
	<script src="scripts/jquery.js" type="text/javascript"></script>
	<script src="scripts/scripts.js" type="text/javascript"></script>
</body>
</html>