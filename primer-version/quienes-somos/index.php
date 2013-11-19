<?php
	header('Content-Type: text/html; charset=utf-8');
	require("../config.php");
	$id = "quienes-somos";
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="es"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<title>Triana Eventos - Quienes somos</title>
	<meta name="description" content="Triana Eventos una empresa joven que valora la excelencia y el prestigio de nuestros clientes a la hora de generar un evento a su medida.">
	<meta charset="utf-8" />
	<!--meta name="google-site-verification" content="" /-->
	<meta name="robots" content="all" />
	<meta name="HandheldFriendly" content="True">
	<meta content="width=device-width" />
	<meta http-equiv="cleartype" content="on">
	<link rel='index' title='Leopardo Agency: Nosotros' href='http://www.leopardoagency.com/' />
	<link rel='canonical' href='<?=$BASE_URL;?>'/>
	<!--[if lt IE 9]>
		<script src="<?=$BASE_URL;?>/js/libs/html5.js"></script>
		<script src="<?=$BASE_URL;?>/js/libs/respond.min.js"></script>
	<![endif]-->


	<?php if( $desa == true ){ ?>
	<!-- En desarrollo cargo los js sin comprimir y unificar -->
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/quienes-somos.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/eventos.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/contacto.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/plusslider.css">
	<?php }else{ ?>
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/all-components.css">
	<?php } ?>

</head>

<body>

		<div class="contenedor toLoad quienes-somos interna" id="quienes-somos">

			<?php include("../includes/header.php"); ?>

			<section class="cuerpo animated fadeIn">

				<h3><span class="hide">Quienes Somos</span></h3>
				<p>Somos una empresa joven que valora la excelencia y el prestigio de nuestros clientes a la hora de generar un evento a su medida, nuestro compromiso es saber interpretar sus necesidades y brindarle el asesoramiento integral  necesario para tal fin. Nuestra meta es poder traducir sus requisitos y así lograr un evento único e irrepetible.</p>

				<span class="deco"></span>
			</section>

			<?php include("../includes/footer.php"); ?>

		</div>


	<script>
		/* scr.js 0B 0.1.4 - 14/10/2011 - Little tiny loader for javascript sources. */(function(a){window.scr={js:function(o,h){if(typeof o==="string"){o=[o]}var j,k,m,l,f,g,d;j=a.getElementsByTagName("script")[0];k={t:o.length,i:0};k.r=function(){return k.t===k.i};m=function(){k.i+=1;if(h&&k.r()){h()}};l=(function(){if(j.readyState){return function(b){b.onreadystatechange=function(){if(b.readyState==="loaded"||b.readyState==="complete"){b.onreadystatechange=null;m()}}}}else{return function(b){b.onload=function(){m()}}}}());f=0;g=a.createElement("script");for(f;f<k.t;f+=1){d=g.cloneNode(true);l(d);d.src=o[f];j.parentNode.insertBefore(d,j)}}}}(document));

		// Imprimo la variable base url global
		<? echo "var base_url = '$BASE_URL';" ?>

		<?php if( $desa == true ){ ?>

			// SI es desarrollo cargo los scripts sin comprimir
			scr.js(base_url+"/js/libs/jquery.js", function(){

		    	scr.js([base_url+"/js/libs/jquery.mousewheel.js",
		    			base_url+"/js/libs/jquery.scrollTo.js",
		    			base_url+"/js/libs/jquery.easing.1.3.js",
		    			base_url+"/js/libs/jquery.placeholder.js",
		    			base_url+"/js/libs/jquery.plusslider-min.js",
		    			base_url+"/js/navegacion.js"],function(){
		    				scr.js(base_url+"/js/global.js",function(){

		    					scr.js(base_url+"/js/quienes-somos.js");

		    				})
		    	})

			});

		<?php }else{ ?>

			scr.js(base_url+"/js/build/all-components.js", function(){

		    	scr.js(base_url+"/js/quienes-somos.js");

		    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-41452275-1', 'trianaeventos.com');
				ga('send', 'pageview');
			});

		<?php } ?>
	</script>

</body>
</html>