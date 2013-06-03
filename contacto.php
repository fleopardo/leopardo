<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "contacto";
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="es"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<title>Asistec - Servicios y productos hidráulicos y neumáticos.</title>
	<meta name="description" content="servicios hidraulicos, servicios neumaticos, maquinas hidraulicas, cilindros, valvulas, repuestos hidraulicos, asistencia tecnica, venta de repuestos, instalaciones, reparaciones, mantenimiento, venta de componentes hidraulicos, neumaticos">
	<meta name="description" content="servicios hidraulicos, servicios neumaticos, maquinas hidraulicas, cilindros, valvulas, repuestos hidraulicos, asistencia tecnica, venta de repuestos, instalaciones, reparaciones, mantenimiento, venta de componentes hidraulicos, neumaticos">
	<meta charset="utf-8" />
	<meta name="robots" content="all" />
	<meta name="HandheldFriendly" content="True">
	<meta content="width=device-width" />
	<meta http-equiv="cleartype" content="on">
	<link rel='index' title='Asistec - Servicios hidraulicos y neumaticos' href='<?=$BASE_URL;?>' />
	<link rel='canonical' href='<?=$BASE_URL;?>'/>
	<!--[if lt IE 9]>
		<script src="<?=$BASE_URL;?>/js/libs/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/plusslider.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/contacto.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/jquery.ui.selectmenu.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>
</head>

<body class="contacto interna">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido clearfix">
			<h3 class="titulo-grande">Contacto</h3>

			<div class="col">
				<form id="form-consulta" method="POST" action="envio-contacto.php">
					<div class="row">
						<label for="nombre">Nombre <span>*</span></label>
						<input type="text" id="nombre" name="nombre" />
					</div>
					<div class="row">
						<label for="apellido">Apellido <span>*</span></label>
						<input type="text" id="apellido" name="apellido" />
					</div>
					<div class="row">
						<label for="email">Email <span>*</span></label>
						<input type="text" id="email" name="email" />
					</div>
					<div class="row">
						<label for="telefono">Telefono</label>
						<input type="text" id="telefono" name="telefono" />
					</div>
					<div class="row">
						<label for="consulta">Consulta <span>*</span></label>
						<textarea id="consulta" name="consulta"></textarea>
					</div>
					<div class="row">
						<label for="destinatario">Destinatario</label>
						<select id="destinatario">
							<option value="central">Casa central</option>
							<option value="ventas">Ventas</option>
						</select>
					</div>

					<input type="submit" value="Enviar" />

					<p id="form-response"></p>
				</form>
			</div>

			<div class="col">
				<h4>Casa Central:</h4>
				<ul>
					<li>Direccion: Ricardo Balbin (Ruta 8) 3470</li>
					<li>Telefono: 4738-1668 / 4849-1228</li>
					<li>Mail: <a href="mailto:asis-tec@asis-tecweb.com">asis-tec@asis-tecweb.com</a></li>
				</ul>
				<div id="mapa-central" class="mapa"></div>
			</div>

			<div class="col last">
				<h4>Ventas:</h4>
				<ul>
					<li>Direccion: 25 de Mayo 1608 San Martin</li>
					<li>Telefono: 4752-9986</li>
					<li>Mail: <a href="mailto:ventas@asis-tecweb.com">ventas@asis-tecweb.com</a></li>
				</ul>
				<div id="mapa-ventas" class="mapa"></div>
			</div>

		</section>

	</div>

	<?php include("./includes/footer.php"); ?>


	<script>
		/* scr.js 0B 0.1.4 - 14/10/2011 - Little tiny loader for javascript sources. */(function(a){window.scr={js:function(o,h){if(typeof o==="string"){o=[o]}var j,k,m,l,f,g,d;j=a.getElementsByTagName("script")[0];k={t:o.length,i:0};k.r=function(){return k.t===k.i};m=function(){k.i+=1;if(h&&k.r()){h()}};l=(function(){if(j.readyState){return function(b){b.onreadystatechange=function(){if(b.readyState==="loaded"||b.readyState==="complete"){b.onreadystatechange=null;m()}}}}else{return function(b){b.onload=function(){m()}}}}());f=0;g=a.createElement("script");for(f;f<k.t;f+=1){d=g.cloneNode(true);l(d);d.src=o[f];j.parentNode.insertBefore(d,j)}}}}(document));

		// Imprimo la variable base url global
		<? echo "var base_url = '$BASE_URL';" ?>

		scr.js("js/libs/jquery.js", function(){

			scr.js(["js/libs/jquery.easing.1.3.js",
					"js/libs/jquery-ui-1.8.12.custom.min.js",
					"js/libs/jquery.plusslider-min.js"], function(){

					scr.js("js/libs/jquery.ui.selectmenu.js",function(){

						scr.js("js/global.js", function(){
							scr.js("js/contacto.js");
						});

					})

			});

		});
	</script>

</body>
</html>