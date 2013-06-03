<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php require("../config.php"); ?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="es"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<title>Leopardo Agency: Portfolio</title>
	<meta name="description" content="Somos una agencia de diseño y programación de paginas web en Buenos Aires. Expertos en diseño de alto impacto, branding y comunicacion digital.">
	<meta charset="utf-8" />
	<!--meta name="google-site-verification" content="" /-->
	<meta name="robots" content="all" />
	<meta name="HandheldFriendly" content="True">
	<meta content="width=device-width" />
	<meta http-equiv="cleartype" content="on">
	<link rel='index' title='Leopardo Agency: Portfolio' href='http://www.leopardoagency.com/' />
	<link rel='canonical' href='<?=$BASE_URL;?>'/>
	<!--[if lt IE 9]>
		<script src="<?=$BASE_URL;?>/js/libs/html5.js"></script>
		<script src="<?=$BASE_URL;?>/js/libs/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/chico-0.13.2.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/jquery.maximage.min.css" />

	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/portfolio.css">

	<?php if($isIpad == false){ ?>
		<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/home.css">
		<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/servicios.css">
		<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/contacto.css">
		<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/nosotros.css">
		<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/clientes.css">
	<?php }	?>

	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body>

		<header class="header-principal">
			<h1><a href="<?=$BASE_URL;?>" title="Leopardo Agency: Diseño y programación web">Leopardo Agency</a></h1>
			<h2 class="hide">Estudio de diseño y programación web.</h2>
		</header>

		<nav class="nav-principal">
			<ul>
				<li><a href="<?=$BASE_URL;?>" title="Ir a la pagina principal" data-nav:id="home" class="nav-async">Home</a></li>
				<li><a href="<?=$BASE_URL;?>/portfolio" title="Ver portfolio" data-nav:id="portfolio" data-nav:color="dark" class="active nav-async">Portfolio</a></li>
				<li><a href="<?=$BASE_URL;?>/servicios" title="Ver Servicios" data-nav:id="servicios" data-nav:color="dark" class="nav-async">Servicios</a></li>
				<li><a href="<?=$BASE_URL;?>/clientes" title="Ver Clientes" data-nav:id="clientes" data-nav:color="dark" class="nav-async">Clientes</a></li>
				<li><a href="<?=$BASE_URL;?>/nosotros" title="Nosotros" data-nav:id="nosotros" class="nav-async">Nosotros</a></li>
				<li><a href="<?=$BASE_URL;?>/contacto" title="Contactanos" data-nav:id="contacto" class="nav-async">Contacto</a></li>
			</ul>
		</nav>

		<section class="contenido portfolio" id="portfolio">

			<div class="contenedor">
				<h3>Portfolio</h3>

				<!--ul class="categs clearfix">
					<li class="web active">Web</li>
					<li><a href="#" class="mobile">Mobile</a></li>
					<li><a href="#" class="labs">Labs</a></li>
				</ul-->

				<section id="web" class="ch-carousel mask">
					<ul>
						<li><a href="<?=$BASE_URL;?>/portfolio/posta.php"><img src="<?=$BASE_URL;?>/img/portfolio/posta.png" width="240" height="290" /></a></li>
						<li><a href="<?=$BASE_URL;?>/portfolio/calpsa.php"><img src="<?=$BASE_URL;?>/img/portfolio/calpsa.png" width="240" height="290" /></a></li>
						<li><a href="<?=$BASE_URL;?>/portfolio/foodpro.php"><img src="<?=$BASE_URL;?>/img/portfolio/foodpro.png" width="240" height="290" /></a></li>
						<li><a href="<?=$BASE_URL;?>/portfolio/gonzalo-heras.php"><img src="<?=$BASE_URL;?>/img/portfolio/gonzalo-heras.png" width="240" height="290" /></a></li>

						<li><a href="<?=$BASE_URL;?>/portfolio/later.php"><img src="<?=$BASE_URL;?>/img/portfolio/later.png" width="240" height="290" /></a></li>
						<li><a href="<?=$BASE_URL;?>/portfolio/morico.php"><img src="<?=$BASE_URL;?>/img/portfolio/morico.png" width="240" height="290" /></a></li>
						<li><a href="<?=$BASE_URL;?>/portfolio/crac-agence.php"><img src="<?=$BASE_URL;?>/img/portfolio/crac-agence.png" width="240" height="290" /></a></li>
						<li><img src="<?=$BASE_URL;?>/img/portfolio/empty.png" width="240" height="290" /></li>
					</ul>
				</section>
			</div>
		</section>

		<?php include("../includes/footer.php"); ?>


	<script>
		/* scr.js 0B 0.1.4 - 14/10/2011 - Little tiny loader for javascript sources. */(function(a){window.scr={js:function(o,h){if(typeof o==="string"){o=[o]}var j,k,m,l,f,g,d;j=a.getElementsByTagName("script")[0];k={t:o.length,i:0};k.r=function(){return k.t===k.i};m=function(){k.i+=1;if(h&&k.r()){h()}};l=(function(){if(j.readyState){return function(b){b.onreadystatechange=function(){if(b.readyState==="loaded"||b.readyState==="complete"){b.onreadystatechange=null;m()}}}}else{return function(b){b.onload=function(){m()}}}}());f=0;g=a.createElement("script");for(f;f<k.t;f+=1){d=g.cloneNode(true);l(d);d.src=o[f];j.parentNode.insertBefore(d,j)}}}}(document));

		// Imprimo la variable base url global
		<? echo "var base_url = '$BASE_URL';" ?>

		scr.js("../js/libs/jquery.js", function(){

	    	scr.js(["../js/libs/jquery.cycle.all.min.js",
	    			"../js/libs/jquery.maximage.min.js",
	    			"../js/libs/jquery.touchwipe.min.js",
	    			"../js/libs/jquery.mousewheel.js",
	    			"../js/libs/chico-min-0.13.2.js",
	    			"../js/libs/jquery.scrollTo.js",
	    			"../js/libs/jquery.easing.1.3.js",
	    			"../js/libs/jquery.placeholder.js",
	    			"../js/navegacion.js"],function(){
	    				scr.js("../js/global.js",function(){

	    					scr.js("../js/portfolio.js");

	    				})
	    	})

		});
	</script>

	<script>
	    var _gaq=[['_setAccount','UA-36808384-1'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>


	<!-- El server -->
</body>
</html>