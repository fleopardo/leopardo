<?php

	// Archivo casero para configurar ambiente de desarrollo y produccion

	if ( $_SERVER['HTTP_HOST'] == "localhost" ){ $desa = true; };

	if( $desa == true ){

		$BASE_URL = "http://localhost/leopardo/leopardoagency";

	}else{

		$BASE_URL = "http://www.leopardoagency.com";

	}


	$isIpad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');

?>