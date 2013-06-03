<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php include_once('config.php')?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js"> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9"> <![endif]-->
<!--[if !IE ]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title>Gonzalo Heras</title>
		<meta name="description" content="Gonzalo heras, locutor comercial de radio y TV, conductor, periodista">
		<meta name="keywords" content="Gonzalo heras, locutor comercial de radio y TV, conductor, periodista">
		<?php include_once('includes/head.php'); ?>
	</head>
	<body>
		<script>
			$("body").css("visibility","hidden");
		</script>
		<!-- home -->
		<div id="home" class="section">
			<div class="wrapper">
				<header class="section-header">
					<h1><a href="index.php" title="Gonzalo Heras" class="logo"><span class="DN">Gonzalo Heras</span></a></h1>
				</header>
				<?php include_once('includes/menu.php')?>
				<section class="section-content">
					<img src="img/im_personaje.png" alt="" class="personaje" />
					<div class="bg-rotated"></div>
					<div id="slider-video">
						<a href="http://www.youtube.com/watch?v=fCj8hmqD9Io&list=UU5dY7Tz1fs2Jj6u3h4HScyQ&index=35&feature=plcp" title="Gonzalo Heras - Locucion Frigor" rel="prettyPhoto">
							<img src="img/im_destacado-frigor.jpg" alt="" width="456" height="255" alt="Gonzalo Heras - Locucion Frigor" />
						</a>
						<a href="http://www.youtube.com/watch?v=F9Hm1yX8byg&list=UU5dY7Tz1fs2Jj6u3h4HScyQ&index=40&feature=plcp" title="Gonzalo Heras - Locucion Fibertel" rel="prettyPhoto">
							<img src="img/im_destacado-fibertel.jpg" alt="" width="456" height="255" alt="Gonzalo Heras - Locucion Fibertel" />
						</a>
						<a href="http://youtu.be/3bTCHBcsgBw" title="Gonzalo Heras - Locucion Preservativos M" rel="prettyPhoto">
							<img src="img/im_destacado-preservativos-m.jpg" alt="Gonzalo Heras - Locucion Preservativos M" width="456" height="255" />
						</a>
						<a href="http://www.youtube.com/watch?v=84TSW36p_58&feature=BFa&list=UU5dY7Tz1fs2Jj6u3h4HScyQ" title="Gonzalo Heras - Locucion Cinzano" rel="prettyPhoto">
							<img src="img/im_destacado-cinzano.jpg" alt="" width="456" height="255" alt="Gonzalo Heras - Locucion Cinzano" />
						</a>
						<a href="http://www.youtube.com/watch?v=GyKLJcQimSM&feature=BFa&list=UU5dY7Tz1fs2Jj6u3h4HScyQ" title="Gonzalo Heras - Locucion Santanderrio" rel="prettyPhoto">
							<img src="img/im_destacado-santanderrio.jpg" alt="Gonzalo Heras - Locucion Santanderrio" width="456" height="255" />
						</a>
						<a href="http://www.youtube.com/watch?v=Vopcjh8JmmY&list=UU5dY7Tz1fs2Jj6u3h4HScyQ&index=3&feature=plcp" title="Gonzalo Heras - Conduccion Gen 2.0" rel="prettyPhoto">
							<img src="img/im_destacado-gen20.jpg" alt="Gonzalo Heras - Conduccion Gen 2.0" width="456" height="255" />
						</a>
						<a href="http://www.youtube.com/watch?v=gTqspNePVM8&feature=BFa&list=UU5dY7Tz1fs2Jj6u3h4HScyQ" title="Gonzalo Heras - Narracion Discovery" rel="prettyPhoto">
							<img src="img/im_destacado-discovery.jpg" alt="Gonzalo Heras - Narracion Discovery" width="456" height="255" />
						</a>
					</div>
					<div class="profile">
						<h2>Profile</h2>
						<p>Es locutor, actor, conductor, licenciado en comunicación y periodista.</p>
						<a href="http://ar.linkedin.com/pub/gonzalo-heras/51/145/700" title="Gonzalo Heras" target="_blank"><span class="DN">Gonzalo Heras Linked in</span></a>
					</div>

					<div id="contentReelAudio">
						<script language="JavaScript" src="./js/audio-player.js"></script>

						<object type="application/x-shockwave-flash" data="./player.swf" id="audioplayer1" height="24" width="290"><param name="movie" value="./player.swf"><param name="FlashVars" value="playerID=1&amp;soundFile=audios/reel-audio.mp3"><param name="quality" value="high"><param name="menu" value="false"><param name="wmode" value="transparent"></object>

						<a class="descarga-audio" href="http://www.gonzaloheras.com/audios/reel-audio-gonzalo-heras.zip" title="Descargar Reel audio">Descargar Reel Audio</a>

					</div>

					<ul class="reel">
						<li class="reelAudio">
							<a rel="prettyPhoto" href="#contentReelAudio" title="Escuchar reel audio - Gonzalo Heras">
								<a class="descarga-reel" href="http://www.gonzaloheras.com/audios/reel-audio-gonzalo-heras.zip" title="Descargar Reel audio">> Descargar Reel Audio</a>
							</a>
						</li>

						<li class="reelVideo">
							<a rel="prettyPhoto" href="http://www.youtube.com/watch?v=9ux9nvIpHUs&feature=youtu.be" title="Ver reel video - Gonzalo Heras">
								<span class="DN">Veer reel de video.</span>
							</a>
						</li>
					</ul>

					<div class="sliderLogos">
						<ul class="bjqs">
					        <li><img src="img/im_marcas-1.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-2.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-3.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-4.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-5.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-6.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-7.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-8.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					        <li><img src="img/im_marcas-9.png" width="" height="" alt="marcas que confiaron en mi" /></li>
					    </ul>
					</div>
				</section>

				<?php include_once('includes/footer.php')?>
			</div>
		</div>

		<?php include_once('includes/close.php'); ?>
	</body>
</html>