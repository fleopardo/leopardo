<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "home";
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
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/home.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body class="home">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido">

			<div class="slider-principal">

				<p><span>Asistec es una empresa</span> que aporta soluciones para incrementar la productividad de las empresas.</p>

				<div class="slider">
					<img src="<?=$BASE_URL;?>/img/home/slide02.png" width="960" height="450" />
					<img src="<?=$BASE_URL;?>/img/home/slide03.png" width="960" height="450" />
					<img src="<?=$BASE_URL;?>/img/home/slide04.png" width="960" height="450" />
					<img src="<?=$BASE_URL;?>/img/home/slide01.png" width="960" height="450" />
				</div>
			</div>

			<section class="destacados">
				<article class="servicios">
					<a href="<?=$BASE_URL;?>/servicios.php" data-efect="true">
						<h3 class="titulo-chico">Servicios</h3>
						<p>Realizamos instalaciones, mantenimiento y reparaciones de válvulas, cilindros, bombas, equipos hidráulicos y neumáticos.</p>
					</a>
				</article>

				<article class="productos">
					<a href="<?=$BASE_URL;?>/productos.php" data-efect="true">
						<h3 class="titulo-chico">Productos</h3>
						<p>Tenemos una amplia gama de productos hidráulicos y neumáticos. Bombas, motores, cilindros, valvulas, accesorios y mucho más.</p>
					</a>
				</article>

				<article class="empresa">
					<a href="<?=$BASE_URL;?>/empresa.php" data-efect="true">
						<h3 class="titulo-chico">Empresa</h3>
						<p>Con experiencia de 25 años en el mercado, desarrollamos procesos de automatización con sistemas hidráulicos y neumáticos.</p>
					</a>
				</article>
			</section>
		</section>

	</div>

	<?php include("./includes/footer.php"); ?>


	<script>
		/* scr.js 0B 0.1.4 - 14/10/2011 - Little tiny loader for javascript sources. */(function(a){window.scr={js:function(o,h){if(typeof o==="string"){o=[o]}var j,k,m,l,f,g,d;j=a.getElementsByTagName("script")[0];k={t:o.length,i:0};k.r=function(){return k.t===k.i};m=function(){k.i+=1;if(h&&k.r()){h()}};l=(function(){if(j.readyState){return function(b){b.onreadystatechange=function(){if(b.readyState==="loaded"||b.readyState==="complete"){b.onreadystatechange=null;m()}}}}else{return function(b){b.onload=function(){m()}}}}());f=0;g=a.createElement("script");for(f;f<k.t;f+=1){d=g.cloneNode(true);l(d);d.src=o[f];j.parentNode.insertBefore(d,j)}}}}(document));

		// Imprimo la variable base url global
		<? echo "var base_url = '$BASE_URL';" ?>

		scr.js("js/libs/jquery.js", function(){

			scr.js(["js/libs/jquery.easing.1.3.js",
					"js/libs/jquery.plusslider-min.js"], function(){

					scr.js("js/global.js", function(){
						scr.js("js/home.js");
					});

			});

		});
	</script>

</body>
</html>