<nav>
	<ul>
		<li<?php echo ($_SERVER['SCRIPT_NAME'] == BASE_PATH.'index.php' ? ' class="active"' : '')?>><a href="<?php echo BASE_PATH.INDEX_SLUG?>" title="Inicio">Inicio</a></li>
		<li<?php echo ($_SERVER['SCRIPT_NAME'] == BASE_PATH.'trabajos.php' ? ' class="active"' : '')?>><a href="<?php echo BASE_PATH.TRABAJOS_SLUG?>" title="Trabajos">Trabajos</a></li>
		<li<?php echo ($_SERVER['SCRIPT_NAME'] == BASE_PATH.'contact.php' ? ' class="active"' : '')?>><a href="<?php echo BASE_PATH.CONTACT_SLUG?>" title="Contacto">Contacto</a></li>
	</ul>
</nav>