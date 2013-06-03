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

<body id="clientes">
	
	<?php include("./includes/menu.php"); ?>
	

	<section>
		<h2>Clientes</h2>

		<div class="box form">
			<h3>Agregar un nuevo cliente:</h3>
			<form enctype='multipart/form-data' method="post" action="./clientes_post.php">
				<p><label for="nombre">Nombre del cliente:</label>
				<input type="text" name="nombre" id="nombre" class="text"/></p>
				<p><label for="foto">Selecciona el logo:</label>
				<input type="file" name="foto" id="foto" /></p>
				<input type="submit" value="enviar"/>
			</form>
		</div>


		<div class="box listado">
			<h3>Listado de clientes</h3>
			<ul class="clearfix">
				<?php
					$query = mysql_query("SELECT * FROM clients",$link);

					if( mysql_num_rows($query) == 0 ){
						echo "<p>No hay resultados.</p>";
					}else{
						while ($result = mysql_fetch_array($query, MYSQL_ASSOC)){
					?>
						<li>
							<img src="../fotos-clientes/<?= $result['imagen']; ?>" alt="<?= $result['nombre']; ?>" />
							<a href="./clientes_delete.php?id=<?= $result['id']; ?>">Borrar</a>
						</li>	
					<?php
						}
					}
				?>
			</ul>
		</div>
	</section>
	
	<?php include("./includes/footer.php"); ?>
	
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>