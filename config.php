<?php

	// Archivo casero para configurar ambiente de desarrollo y produccion

	if ( $_SERVER['HTTP_HOST'] == "localhost" ){ $desa = true; };

	if( $desa == true ){

		$BASE_URL = "http://localhost/asistec";

	}else{

		$BASE_URL = "http://www.asis-tecweb.com";

	}

	// Variable para saber si es Ipad o no
	$isIpad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');

?>