<header class="header-principal">
	<h1 class="animated fadeInRight"><a href="<?=$BASE_URL;?>" title="Triana Eventos: Organización de Eventos" data-nav:id="home" class="nav-async">Triana Eventos</a></h1>
	<h2 class="hide">Organización de eventos</h2>
</header>

<nav class="nav-principal animated fadeIn">
	<ul>
		<li>
			<a href="<?=$BASE_URL;?>" title="Ir a la pagina principal" data-nav:id="home" class="nav-async <?php if($id=='home'){?>active<?php } ?>">Home</a>
		</li>

		<li>
			<a href="<?=$BASE_URL;?>/quienes-somos" title="Quienes somos" data-nav:id="quienes-somos" class="nav-async <?php if($id=='quienes-somos'){?>active<?php } ?>">Quienes somos</a>
		</li>

		<li>
			<a href="<?=$BASE_URL;?>/eventos" title="Nuestros eventos" data-nav:id="eventos"class="nav-async <?php if($id=='eventos'){?>active<?php } ?>">Eventos</a>
		</li>

		<li>
			<a href="<?=$BASE_URL;?>/contacto" title="Contactese" data-nav:id="contacto" class="nav-async <?php if($id=='contacto'){?>active<?php } ?>">Contacto</a>
		</li>
	</ul>
</nav>