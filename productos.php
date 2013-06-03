<?php $page="productos"; 

require("./admin/conexion.php");
	$link = Conectarse();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calpsa SA: Productos y servicios para el transporte</title>
	<meta charset="utf-8" />
	<meta name="description" content="Calefactores, Claraboyas, Cortinas de Aire, Desempa&ntilde;adores, Defrosters, Extractores, Inyectores de Aire, H&eacute;lices y Turbinas, Limpiaparabrisas, Motores y Motorreductores, Porta Faros y Porta Teclas, Rejillas, Sopladores, Ventiladores"> 
	<meta name="keywords" content="Calefactores, Claraboyas, Cortinas de Aire, Desempa&ntilde;adores, Defrosters, Extractores, Inyectores de Aire, H&eacute;lices y Turbinas, Limpiaparabrisas, Motores y Motorreductores, Porta Faros y Porta Teclas, Rejillas, Sopladores, Ventiladores"> 

	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" type="text/css" href="css/jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="css/plusslider.css" />
	
</head>

<body class="productos">
	<div class="wrapper clearfix">
		
		<?php include("./includes/header.php"); ?>
		
		<section class="content clearfix">
			
			<div class="left-col">
				
				<?php 
					$queryCategorias = mysql_query("SELECT * FROM categories order by nombre",$link);
					if( mysql_num_rows($queryCategorias) > 0 ){ 
				?>
				<ul class="accordion-menu">
					<?php 
						while ($resultCategorias = mysql_fetch_array($queryCategorias, MYSQL_ASSOC)){	
						$id = $resultCategorias['id'];

						$queryProductos = mysql_query("SELECT * FROM products WHERE categ_id=$id order by nombre",$link);
						

					?>
					<li>
						<h2 data-id="<?= $resultCategorias['id']; ?>"><?= $resultCategorias['nombre']; ?></h2>
						<ul class="DN">
							<?php if( mysql_num_rows($queryProductos) <= 0 ){ ?>
							<li>No hay productos</li>
							<?php } ?>
								
							<?php while ($resultProductos = mysql_fetch_array($queryProductos, MYSQL_ASSOC)){ ?>
							
							<li>
								<a href="./get_productos.php?id=<?= $resultProductos['id']; ?>" class="ver-producto" title="<?= $resultProductos['nombre']; ?>"><?= $resultProductos['nombre']; ?></a>
							</li>
							<?php }	?>
						</ul>
					</li>

					<?php }	?>

				</ul>
				<?php }	?>
			</div>
			

			<?php 
				$queryTodosProductos = mysql_query("SELECT * FROM products order by nombre",$link);
				if( mysql_num_rows($queryTodosProductos) > 0 ){ ?>
						
					<div class="right-col">
						<div class="txt">
							<h1>Productos</h1>
							<p class="destacado">en Calefaccion, climatizacion, limpiaparabrisas</p>
							<p>En esta seccion encontraran gran parte de la gama de productos que fabricamos y comercializamos, los invitamos a conocerlos en su caracteristicas tecnicas y descriptivas.</p>
						</div>
						<ul class="carousel-productos mask">
							
							<?php while ($resultTodosProductos = mysql_fetch_array($queryTodosProductos, MYSQL_ASSOC)){	?>
							<li>
								<a href="./get_productos.php?id=<?= $resultTodosProductos['id']; ?>" class="ver-producto" title="<?= $result2['nombre']; ?>">
									<img src="./img/loading70.gif" orig="fotos-productos/<?= $resultTodosProductos['imagen']; ?>" alt="<?= $result2['nombre']; ?>" width="78" height="78" />
									<span><?= $resultTodosProductos['nombre']; ?></span>
								</a>
							</li>
							<?php }	?>
						</ul>
					</div>

				<?php }	?>

			<div class="cont-servicios">
				<h2>Servicios</h2>
				<a href="javascript:void(0);" title="Ver servicios" id="openServicio">haga clic aqu&iacute; para conocerlos.</a>
			</div>

			<div id="producto"></div>

			<div id="servicios">
				<?php
				$queryServicios = mysql_query("SELECT * FROM services",$link);
				$resultServicios = mysql_fetch_array($queryServicios, MYSQL_ASSOC);
				?>
				<?= $resultServicios["servicios"]; ?>
			</div>

		</section>
	</div>
	
	<?php include("./includes/footer.php"); ?>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.plusslider.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplemodal.1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>