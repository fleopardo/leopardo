<?php $page="contacto"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Calpsa SA: Productos y servicios para el transporte</title>
	<meta charset="utf-8" />
		
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" type="text/css" href="css/jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="css/plusslider.css" />
	
</head>

<body class="contacto">
	<div class="wrapper clearfix">
		
		<?php include("./includes/header.php"); ?>
		
		<section class="content clearfix">
			<h1>Contactenos</h1>
			<p class="destacado">Podes completar el siguiente formulario para contactarte con nosotros</p>
			<form action="./envio-mail.php" method="post">
				<fieldset>
					<div class="left-col">
						<input type="text" placeholder="*Nombre..." id="nombre" name="nombre" />
						<input type="text" placeholder="*Email..." id="email" name="email" />
						<input type="text" placeholder="Tel&eacute;fono..." id="telefono" name="telefono" />
					</div>
					<div class="right-col clearfix">
						<textarea id="consulta" placeholder="*Consulta..." name="consulta"></textarea>
						<input type="submit" value="Enviar" id="botonEnviarConsulta" />
					</div>
				</fieldset>
			</form>
			<address>
				O' GORMAN 3475<br/>
				Tel/Fac (054-011) 4919-7404/7724<br />
				C1437BCI) CABA Argentina.<br />
				<a href="javascript:void(0);" title="Ver en Mapa" id="openMap">Ver mapa</a>
			</address>
			<div class="contentMap">
				<div id="map"></div>
			</div>
		</section>
	</div>
	
	<?php include("./includes/footer.php"); ?>
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.plusslider.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplemodal.1.4.2.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>