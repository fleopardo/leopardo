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

	<section style="overflow: hidden;">
		<h2>Categorias de productos</h2>

		<div class="columnaIzquierda">
			<h3>Listado de categorias</h3>
			<ul>
				<?php
					$query = mysql_query("SELECT * FROM categories order by nombre",$link);

					if( mysql_num_rows($query) == 0 ){
						echo "<p>No hay categorias.</p>";
					}else{
						while ($result = mysql_fetch_array($query, MYSQL_ASSOC)){
					?>
						<li>
							<?= $result['nombre']; ?>
							<a href="./categorias_edit.php?id=<?= $result['id']; ?>">Editar</a> 
							<a href="./categorias_delete.php?id=<?= $result['id']; ?>" class="delete">Borrar</a>
						</li>	
					<?php
						}
					}
				?>
			</ul>
		</div>

		<div class="columnaDerecha">
			<h3>Agregar una nueva categoria</h3>
			
			<form action="./categorias_post.php" method="post">
				<fieldset>

					<p><label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" class="text" /></p>

					<p><label for="descripcion">Descripcion:</label><br />
					<textarea id="descripcion" name="descripcion"></textarea></p>
					
					<input type="submit" value="Agregar"/>

				</fieldset>
			</form>
		</div>
		
	</section>
	
	<?php include("./includes/footer.php"); ?>
	
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>
	<script type="text/javascript">
		
		$(".delete").each(function(){
			$(this).click(function(){
				var href = $(this).attr("href");
				if(confirm("Si borra la categoria se borraran todos sus productos. Desea continuar?")){
					window.location = href;
				}
				return false;
			});
		});
	</script>
</body>
</html>