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
	<title>Triana Eventos</title>
	<meta name="description" content="">
	<meta charset="utf-8" />
	<meta name="robots" content="all" />
	<meta name="HandheldFriendly" content="True">
	<meta content="width=device-width" />
	<meta http-equiv="cleartype" content="on">
	<meta name="Author" content="Leopardo Agency, info@leopardoagency.com">
	<link rel='index' title='Triana Eventos - Organización de eventos' href='<?=$BASE_URL;?>' />
	<link rel='canonical' href='<?=$BASE_URL;?>'/>
	<!--[if lt IE 9]>
		<script src="<?=$BASE_URL;?>/js/libs/html5.js"></script>
		<script src="<?=$BASE_URL;?>/js/libs/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/quienes-somos.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/eventos.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/contacto.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$BASE_URL;?>/css/libs/plusslider.css">


	<link rel="shorcut icon" href="<?=$BASE_URL;?>/favicon.png" />
</head>

<body>

	<div class="contenedor toLoad home" id="home">

		<?php include("./includes/header.php"); ?>

		<section class="cuerpo animated fadeIn">

			<h3><span class="hide">Hacemos su evento mágico</span></h3>

		</section>

		<?php include("./includes/footer.php"); ?>

	</div>






	<script>
		/* scr.js 0B 0.1.4 - 14/10/2011 - Little tiny loader for javascript sources. */(function(a){window.scr={js:function(o,h){if(typeof o==="string"){o=[o]}var j,k,m,l,f,g,d;j=a.getElementsByTagName("script")[0];k={t:o.length,i:0};k.r=function(){return k.t===k.i};m=function(){k.i+=1;if(h&&k.r()){h()}};l=(function(){if(j.readyState){return function(b){b.onreadystatechange=function(){if(b.readyState==="loaded"||b.readyState==="complete"){b.onreadystatechange=null;m()}}}}else{return function(b){b.onload=function(){m()}}}}());f=0;g=a.createElement("script");for(f;f<k.t;f+=1){d=g.cloneNode(true);l(d);d.src=o[f];j.parentNode.insertBefore(d,j)}}}}(document));

		// Imprimo la variable base url global
		<? echo "var base_url = '$BASE_URL';" ?>

		scr.js("js/libs/jquery.js", function(){

	    	scr.js(["js/libs/jquery.mousewheel.js",
	    			"js/libs/jquery.scrollTo.js",
	    			"js/libs/jquery.easing.1.3.js",
	    			"js/libs/jquery.placeholder.js",
	    			"js/libs/jquery.plusslider-min.js",
	    			"js/navegacion.js"],function(){
	    				scr.js("js/global.js",function(){

	    					scr.js("js/home.js");

	    				})
	    	})

		});
	</script>

</body>
</html>