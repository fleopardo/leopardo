<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "servicios";
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
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/servicios.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body class="servicios interna">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido clearfix">
			<h3 class="titulo-grande">Servicios <span class="icon"></span></h3>

			<div class="clearfix">
				<div class="col">
					<h4 class="titulo-chico">Equipos hidráulicos a medida</h4>
					<p>Fabricamos equipos hidráulicos exclusivos para la necesidad de cada uno de nuestros clientes. Nuestros equipos estan caracterizados por un alto rendimiento y confiabilidad, construidos en chapa de acero. Todos los componentes se encuentran montado sobre la tapa provista de cancamos, que simplifican su desplazamiento. <a href="productos.php" data-efect="true">Ver equipos hidráulicos y otros productos.</a></p>

					<h4 class="titulo-chico">Mantenimiento</h4>
					<h5>¿Por qué hacer mantenimiento en una empresa?</h5>
					<p>Porque el mantenimiento representa una inversión que a mediano y largo plazo acarreará ganancias no sólo para el empresario quien a quien esta inversión se le revertirá en mejoras en su producción, sino también el ahorro que representa tener un trabajadores sanos e índices de accidentalidad bajos. El mantenimiento representa un arma importante en seguridad laboral, ya que un gran porcentaje de accidentes son causados por desperfectos en los equipos que pueden ser prevenidos.</p>

					<h5>Finalidad del Mantenimiento</h5>
					<p>Conservar la planta industrial con el equipo, los edificios, los servicios y las instalaciones en condiciones de cumplir con la función para la cual fueron proyectados con la capacidad y la calidad especificadas, pudiendo ser utilizados en condiciones de seguridad y economía de acuerdo a un nivel de ocupación y a un programa de uso definidos por los requerimientos de Producción.</p>
				</div>
				<div class="col">
					<h4 class="titulo-chico">Instalaciones</h4>
					<p>Instalamos centrales hidráulicas, cilindros, enfriadores, etc. Hacemos el tendido de cañerías y también brindamos el servicio de automatización y actualización de los sistemas existentes en su empresa para mayor rendimiento productivo de la misma.</p>

					<h4 class="titulo-chico">Reparación</h4>
					<h5>Cilindros</h5>
					<p>Podemos devolverle el estado original a la camisa, vástago, bujes, redimesionamientos de los mismos, sustitución de guarniciones o de ser necesario, diseñar modificaciones para mejoras técnicas del cilindro.</p>

					<h5>Bombas</h5>
					<p>Brindamos el diagnostico y la reparación o sustitucion de los diferentes componentes de la misma.</p>

					<h5>Hidráulicos</h5>
					<p>En caso que su equipo tenga fallas podemos otorgarle asesoramiento técnico y las posibilidades de reparacion. Ante el cambio en la configuración del circuito podemos ofrecerle la modificación del equipo hidraulico existente para su nueva función, brindándole productos de primera línea y configuraciones que mejora las aptitudes técnicas del equipo.</p>

				</div>
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
					"js/libs/jquery.plusslider-min.js"], function(){

					scr.js("js/global.js");

			});

		});
	</script>

</body>
</html>