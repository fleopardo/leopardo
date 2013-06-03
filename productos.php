<?php
	header('Content-Type: text/html; charset=utf-8');
	require("./config.php");

	$id = "productos";
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="es"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<title>Asistec - Servicios y productos hidráulicos y neumáticos.</title>
	<meta name="description" content="Vendemos Accesorios, Acumuladores, Bombas, Cilindros, Equipos hidraulicos, Enfriadores, Filtros, Motores hidraulicos, Valvulas, Neumatica, Cilindros, Valvulas">
	<meta name="description" content="Vendemos Accesorios, Acumuladores, Bombas, Cilindros, Equipos hidraulicos, Enfriadores, Filtros, Motores hidraulicos, Valvulas, Neumatica, Cilindros, Valvulas">
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
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/jcarousel.css" >
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/popover.css" >
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/productos.css">

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.jpg" />
</head>

<body class="productos interna">

	<div class="contenedor">
		<?php include("./includes/header.php"); ?>

		<section class="contenido clearfix">
			<h3 class="titulo-grande">Productos <span class="icon"></span></h3>

			<div class="col">
				<h4 class="titulo-chico">Hidráulicos</h4>
				<p>Ofrecemos una amplia gama de productos hidráulicos, como por ejemplo, bombas, cilindros, motores, válvulas, etc. <strong><a href="servicios.php">Fabricamos equipos hidráulicos a medida</a>.</strong></p>

				<ul id="carousel-hidraulicos" class="carousel mask">
				    <li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/acoples.jpg" width="130" height="130" data-title="Acoples" data-text="" />
						<p>Por medio de la instalacion del acople bomba motor se genera la transmisión de giro del motor hacia la bomba. Se mide en base a los HP generados por el motor electrico. Disponible en aluminio y fundición.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/acumuladores.jpg" width="130" height="130" data-title="Acumuladores" data-text="" />
						<p>Los acumuladores regulan el funcionamiento de un sistema hidráulico. Ellos son convenientes para almacenar la energía bajo la presión, absorbiendo choques hidráulicos, y humedeciendo la pulsación de bomba y fluctuaciones de flujo.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/bocas-de-inspeccion.jpg" width="130" height="130" data-title="Bocas de Inspeccion" data-text="" />
						<p>Se utilizan para ver el estado del fluido en un determinado recipiente. Pueden variar en tamaño y diametro. En Asis-tec cada una de nuestras centrales hidraulicas tiene colocada una boca de inspeccion.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/bombas-a-engranajes.jpg" width="130" height="130" data-title="Bombas a engranajes" data-text="" />
						<p>Las bombas de engranajes tienen una construcción simple, pero tienen el defecto de tener un caudal con pulsaciones. Los ejes de ambos engranajes están soportados por cojinetes de rodillos ubicados en cada extremo.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/bombas-a-paleta.jpg" width="130" height="130" data-title="Bombas a paleta" data-text="" />
						<p>Este tipo de bombas se clasifica en dos grupos: bombas de paletas desiquilibradas y bombas de paletas equilibradas.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/bombas-a-pistones.jpg" width="130" height="130" data-title="Bombas a pistones" data-text="" />
						<p>Las bombas de pistones están formadas por un conjunto de pequeños pistones que van subiendo y bajando de forma alternativa de un modo parecido a los pistones de un motor a partir de un movimiento rotativo del eje.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/cilindros-doble-efecto.jpg" width="130" height="130" data-title="Cilindros doble efecto" data-text="" />
						<p>Los cilindros de doble efecto son aquellos que su accionamiento hidraulico se realiza en los dos sentidos.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/cilindros-doble-vastago.jpg" width="130" height="130" data-title="Cilindros doble vastago" data-text="" />
						<p>Los cilindros de doble vastago tienen las mismas areas, por lo cual tanto las fuerzas como las velocidades son iguales en ambas direcciones.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/cilindros-simple-efecto.jpg" width="130" height="130" data-title="Cilindros simple efecto" data-text="" />
						<p>Los cilindros de simple efecto son aquellos en los que la carrera es accionada hidráulicamente solo en un sentido.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/enfriadores-por-agua.jpg" width="130" height="130" data-title="Enfriadores por agua" data-text="" />
						<p>Alta capacidad de transferencia que se traduce en mas bajas temperaturas de aceite a igualdad de temperatura de agua ingresada.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/enfriadores-por-aire.jpg" width="130" height="130" data-title="Enfriadores por aire" data-text="" />
						<p>Es un enfriador de aceite hidraulico por aire forzado con ventilador de helice a traves de un motor electrico.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/equipos.jpg" width="130" height="130" data-title="Equipos hidráulicos" data-text="" />
						<p>Nuestros equipos se destacan por un alto rendimiento y confiabilidad, con capacidad desde 20lts a 360lts, construidos en chapa de acero. Todos los componentes se encuentran montado sobre la tapa provista de cancamos que simplifican su desplazamiento.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/filtros.jpg" width="130" height="130" data-title="Filtros" data-text="" />
						<p>Usados para el control de la contaminación externa y generadas internamente, permitendo preservar la vida útil tanto de los componentes del equipo como del fluido hidráulico. Tenemos filtros de presión, filtros de retorno, filtro de recirculación y filtro de succión.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/linternas.jpg" width="130" height="130" data-title="Linternas" data-text="" />
						<p>Sirven para el montaje del motor. Existen de tipo Oval y para distintos tamaños de brida (B3 y B5).</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/manometros.jpg" width="130" height="130" data-title="Manometros" data-text="" />
						<p>Instrumento utilizado para la medición de la presión en los fluidos, generalmente determinando la diferencia de la presión entre el fluido y la presión local. Pueden variar el diametro, la conexión y el rango de medicion.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/motores.jpg" width="130" height="130" data-title="Motores" data-text="" />
						<p>Los motores hidráulicos se usan sobre todo porque entregan un par muy grande a velocidades de giro pequeñas en comparación con los motores eléctricos. Tenemos motores hidráulicos a engranajes, motores hidráulicos a pistones y motores hidráulicos a paletas.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/niveles.jpg" width="130" height="130" data-title="Niveles" data-text="" />
						<p>Unidades de medicion de capacidad de aceite que tiene su central hidraulica. Existen de distintos tamaños y rangos. Pueden traer incorporado termometro para poder medir la temperatura del fluido hidraulico.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/terminales.jpg" width="130" height="130" data-title="Terminales" data-text="" />
						<p>Los terminales hidráulicos puede ser usado como junta de transición para accesorios de mangueras y conectores de mangueras. Existen de baja y alta presion. Disponibles en diversas medidas.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/valvulas-de-retencion.jpg" width="130" height="130" data-title="Valvulas de retencion" data-text="" />
						<p>Permite el paso del líquido en una sola dirección, bloqueando la posibilidad de retroceso una vez que el fluido la atraviesa, manteniendo la presión del circuito hidráulico.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/valvulas-direccionales.jpg" width="130" height="130" data-title="Valvulas direccionales" data-text="" />
						<p>Como su nombre lo indica inician, paran y controlan la direccion del fluido en un circuito hidráulico.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/valvulas-reguladoras-de-caudal.jpg" width="130" height="130" data-title="Valvulas reguladoras de caudal" data-text="" />
						<p>Las válvulas reguladoras de caudal se utlizan para regular la velociadad de un cilindro hiraulico o de un motor hidraulico.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/hidraulicos/valvulas-reguladoras-de-presion.jpg" width="130" height="130" data-title="Valvulas reguladoras de presion" data-text="" />
						<p>Esta válvula protege al sistema hidraulico contra als sobrecargas.Cuando la carga es superior al taraje de la válvula, el caudal de la bomba se dirige al deposito limitando el par o la fuerza del cilindro.</p>
					</li>
				</ul>

			</div>
			<div class="col last">
				<h4 class="titulo-chico">Neumáticos</h4>
				<p>También contamos con diferentes tipos de cilindros y válvulas neumáticas. <a href="contacto.php" data-efect="true">Contactanos para conocer más.</a></p>

				<ul id="carousel-neumaticos" class="carousel mask">
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/cilindros-doble-efecto.jpg" width="130" height="130" data-title="Cilindros doble efecto" data-text="" />
						<p>Nuestros cilindros están construidos con vastagos rectificados construidos en acero al carbono SAE 1045, con proteccion de cromo duro, buje antifricción, guarniciones de alta calidad y una camisa construida en tubo de acero sin costura.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/cilindros-simple-efecto.jpg" width="130" height="130" data-title="Cilindros simple efecto" data-text="" />
						<p>Nuestros cilindros están construidos con vastagos rectificados construidos en acero al carbono SAE 1045, con proteccion de cromo duro, buje antifricción, guarniciones de alta calidad y una camisa construida en tubo de acero sin costura.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/conectores.jpg" width="130" height="130" data-title="Conectores" data-text="" />
						<p>Conectores rapido para circuitos neumaticos. Disponibles des 04 a hasta 12. Con roscas de 1/8 hasta 3/4.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/frl.jpg" width="130" height="130" data-title="FRL" data-text="" />
						<p>Filtros, reguladores, lubricadores, Filtro-Regulador, Unidades FR-L de 2 y 3 piezas desde G1/8 hasta G1. Módulos con funciones de corte, presurización progresiva, micro filtrado y regulación de precisión.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/mangueras.jpg" width="130" height="130" data-title="Mangueras Neumáticas" data-text="" />
						<p>Mangueras neumáticas de presión baja, media y alta, resistentes al calor, ozono y a la climatología. Para conectores rapido de 04 hasta 12.</p>
					</li>
					<li>
						<img src="<?=$BASE_URL;?>/img/productos/neumaticos/valvulas.jpg" width="130" height="130" data-title="Valvulas Neumáticas" data-text="" />
						<p>Poseemos una amplia gama de válvulas neumaticas para las diferentes aplicaciones posibles.</p>
					</li>
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
					"js/libs/jquery.jcarousel.js",
					"js/libs/jquery.popover-1.1.2.js"], function(){

					scr.js("js/global.js", function(){
						scr.js("js/productos.js");
					});

			});

		});
	</script>

</body>
</html>