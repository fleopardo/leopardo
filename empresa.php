<?php $page="empresa";

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
	<link rel="stylesheet" type="text/css" href="css/plusslider.css" />
	
</head>

<body class="empresa">
	<div class="wrapper clearfix">
		
		<?php include("./includes/header.php"); ?>

		<section class="content clearfix">
			<h1>La empresa</h1>
			<!--p class="destacado">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p-->
			<div class="scroll-content">
				<?= $result["empresa"];?>
			</div>
			
		</section>
	</div>
	
	<?php include("./includes/footer.php"); ?>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.plusslider.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
</body>

</html>