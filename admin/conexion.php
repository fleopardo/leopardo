<?php
	//funcion para conectarse a la base de datos. Debe ir en un archivo aparte.
	
	/* PRODU 
	function Conectarse(){
		if
		(!($link=mysql_connect("192.168.0.193","calpsa","calpsa1234")))
		{
		echo "Error conectando a la base de datos.";
		exit();
		}
		if (!mysql_select_db("calpsa",$link))
		{
		echo "Error seleccionando la base de datos.";
		exit();
		}
		
		return $link;
	}*/

	/* DESA */
	function Conectarse(){
		if
		(!($link=mysql_connect("localhost","root","")))
		{
		echo "Error conectando a la base de datos.";
		exit();
		}
		if (!mysql_select_db("calpsa",$link))
		{
		echo "Error seleccionando la base de datos.";
		exit();
		}
		return $link;
	}
?>