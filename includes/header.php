<header class="header-principal">
	<h1><a href="<?=$BASE_URL;?>" title="Asistec - Servicios y productos hidráulicos y neumáticos.">Asis-Tec</a></h1>
	<h2 class="hide">Servicios y productos hidráulicos y neumáticos.</h2>

	<nav class="nav-principal">
		<a href="<?=$BASE_URL;?>" title="Pagina principal" <?php if($id=="home"){?>class="active"<?php } ?>>Home</a>
		<a href="<?=$BASE_URL;?>/empresa.php" title="Empresa" <?php if($id=="empresa"){?>class="active"<?php } ?>>Empresa</a>
		<!--a href="<?=$BASE_URL;?>/clientes.php" title="Clientes" <?php if($id=="clientes"){?>class="active"<?php } ?>>Clientes</a-->
		<a href="<?=$BASE_URL;?>/servicios.php" title="Servicios" <?php if($id=="servicios"){?>class="active"<?php } ?>>Servicios</a>
		<a href="<?=$BASE_URL;?>/productos.php" title="Productos" <?php if($id=="productos"){?>class="active"<?php } ?>>Productos</a>
		<a href="<?=$BASE_URL;?>/contacto.php" title="Contacto" class="last <?php if($id=='contacto'){?>active<?php } ?>">Contacto</a>
	</nav>

</header>