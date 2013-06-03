<?php
	require("./admin/conexion.php");
	$link = Conectarse();
	
	$id = $_GET['id'];

	$query = mysql_query("SELECT * FROM products WHERE id=$id order by nombre",$link);
	$result = mysql_fetch_array($query, MYSQL_ASSOC);

?>

<div class="colIzq scroll-content">
	<h3><?= $result['nombre']; ?></h3>
	<?= $result['descripcion']; ?>
</div>


<img src="fotos-productos/<?= $result['imagen']; ?>" alt="<?= $result['nombre']; ?>" width="210px" height="210px" />