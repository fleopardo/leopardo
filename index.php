<?php $page="home";

	require("./admin/conexion.php");
	$link = Conectarse();

	$query = mysql_query("SELECT * FROM institucionals",$link);
	$result = mysql_fetch_array($query, MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calpsa SA: Productos y servicios para el transporte</title>
	<meta charset="utf-8" />
	<meta name="description" content="Calpsa SA, con su vasta experiencia en la fabricacion de Equipos de Calefaccion, Limpiaparabrisas, Extractores y Forzadores de aire, Motores de C.C. desde 25 hasta 736 W en 12-24 y36 V aplicables a diversos usos dentro del Transporte Automotriz Pesado (omnibus, maquinaria agricola, vial y nautica, camiones, etc.).">
	<meta name="keywords" content="experiencia, fabricacion, Equipos de Calefaccion, Limpiaparabrisas, Extractores, Forzadores de aire, Motores, Corriente Continua, diversos usos, Transporte Automotriz Pesado, pasajeros, maquinaria agricola, vial, nautica, camiones, buses, omnibus, micros, carrocera, argentina, buenos aires, calefactores, motorreductores, asientos, ventiladores">

	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" type="text/css" href="css/jcarousel.css" />

</head>

<body class="home">
	<div class="wrapper">

		<?php include("./includes/header.php"); ?>

		<h2>Soluciones efectivas<br />
		<span>en Calefacci&oacute;n, climatizaci&oacute;n y limpiaparabrisas</span></h2>

		<section class="content clearfix">
			<!--div class="left-col">
				<h1>La empresa</h1>
				<p><?= $result["resumen"];?></p>

				<div class="sombra-btn">
					<a href="empresa.php" title="La empresa"><span class="DN">La empresa</span></a>
				</div>
			</div-->

			<?php
				$query2 = mysql_query("SELECT * FROM products ORDER BY RAND() LIMIT 0,15",$link);
				if( mysql_num_rows($query2) > 0 ){ ?>

					<div class="right-col">

						<ul class="carousel-productos home mask">

							<?php while ($result2 = mysql_fetch_array($query2, MYSQL_ASSOC)){	?>
							<li>
								<a href="./get_productos.php?id=<?= $result2['id']; ?>" class="ver-producto" title="<?= $result2['nombre']; ?>">
									<img src="./img/loading70.gif" orig="fotos-productos/<?= $result2['imagen']; ?>" alt="<?= $result2['nombre']; ?>" width="78" height="78" />
									<span><?= $result2['nombre']; ?></span>
								</a>
							</li>
							<?php }	?>
						</ul>
					</div>

				<?php }	?>

				<div id="producto"></div>

		</section>
	</div>

	<?php include("./includes/footer.php"); ?>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplemodal.1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>