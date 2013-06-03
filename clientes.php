<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "clientes";
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
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/clientes.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body class="clientes interna">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido">
			<h3 class="titulo-grande">Clientes</h3>
			<ul class="clearfix">
				<li><img src="<?=$BASE_URL;?>/img/clientes/aperam.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/australtub.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/buquebus.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/dana.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/dema.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/euroflon.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/ferrosider.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/ferrylineas.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/hermac.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/iph.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/maprimed.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/medoro.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/mesch.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/plastiferro.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/produflon.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/stocco.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/tecnigraf.jpg" width="148" height="148" /></li>
				<li><img src="<?=$BASE_URL;?>/img/clientes/wenlen.jpg" width="148" height="148" /></li>
			</ul>
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

					scr.js("js/global.js");

			});

		});
	</script>

</body>
</html>