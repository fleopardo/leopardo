<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "empresa";
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
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/empresa.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body class="empresa interna">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido clearfix">
			<div class="info">
				<h3 class="titulo-grande">Empresa <span class="icon"></span></h3>

				<article>
					<h4 class="titulo-chico">Nosotros Somos</h4>
					<p>Asis-Tec es una empresa que aporta soluciones para incrementar la productividad de las empresas. Desarrollamos procesos de automatización con sistemas hidráulicos, neumáticos y mecánicos, aplicando tecnología de punta combinada con la experiencia de 25 años en el mercado. Contamos con un equipo capacitado, con experiencia profesional en las areas de servicio y reparacion.</p>
				</article>

				<article>
					<h4 class="titulo-chico">Nuestro Objetivo</h4>
					<p>Reafirmar año tras año, nuestro compromiso de superacion permanente, acercando a nuestros clientes el fruto de nuestro trabajo y esfuerzo que distingue a los productos de Asis-Tec, con la calidad de siempre y lo ultimo en materiales.</p>
				</article>

			</div>

			<div class="galeria">
				<div class="zoom">
					<img src="" width="478" height="250" />
				</div>

				<ul id="carousel-empresa" class="mask">
				   <li><a href="<?=$BASE_URL;?>/img/empresa/01.jpg"><img src="<?=$BASE_URL;?>/img/empresa/01.jpg" width="115" height="60" /></a></li>
				   <li><a href="<?=$BASE_URL;?>/img/empresa/02.jpg"><img src="<?=$BASE_URL;?>/img/empresa/02.jpg" width="115" height="60" /></a></li>
				   <li><a href="<?=$BASE_URL;?>/img/empresa/03.jpg"><img src="<?=$BASE_URL;?>/img/empresa/03.jpg" width="115" height="60" /></a></li>
				   <li><a href="<?=$BASE_URL;?>/img/empresa/04.jpg"><img src="<?=$BASE_URL;?>/img/empresa/04.jpg" width="115" height="60" /></a></li>
				</ul>

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
					"js/libs/jquery.plusslider-min.js",
					"js/libs/jquery.jcarousel.js"], function(){

					scr.js("js/global.js", function(){
						scr.js("js/empresa.js");
					});

			});

		});
	</script>

</body>
</html>