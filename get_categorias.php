<?php
	require("./admin/conexion.php");
	$link = Conectarse();
	
	$categId = $_GET['id'];

	$queryCategorias = mysql_query("SELECT * FROM categories WHERE id=$categId order by nombre",$link);
	$resultCategorias = mysql_fetch_array($queryCategorias, MYSQL_ASSOC);

?>


<div class="txt">
	<h1>Productos</h1>
	<p class="destacado">en <?= $resultCategorias['nombre']; ?></p>
	<p><?= $resultCategorias['descripcion']; ?></p>
</div>
<?php 
	$queryProductos = mysql_query("SELECT * FROM products WHERE categ_id=$categId",$link);
	if( mysql_num_rows($queryProductos) > 0){
?>
<ul class="carousel-productos mask">
	
		<?php
		while ($resultProductos = mysql_fetch_array($queryProductos, MYSQL_ASSOC)){	
		?>
		<li>
			<a href="./get_productos.php?id=<?= $resultProductos['id']; ?>" class="ver-producto" title="<?= $resultProductos['nombre']; ?>">
				<img src="fotos-productos/<?= $resultProductos['imagen']; ?>" alt="<?= $resultProductos['nombre']; ?>" width="78" height="78" />
				<span><?= $resultProductos['nombre']; ?></span>
			</a>
		</li>
		<?php }	?>
	
</ul>
<?php }	?>