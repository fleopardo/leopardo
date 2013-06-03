<?php 
	
	session_start(); 

	if($_SESSION["login"] == true){
		header ("Location: index.php");
	}

	require("conexion.php");
	$link = Conectarse();
	
	//Busco los datos
	$query = mysql_query("SELECT * FROM users",$link);
	$result = mysql_fetch_assoc($query);
	
	//defino variables aca por el momento
	$user = $result["user"];
	$password = $result["password"];
	
	if($_SERVER['REQUEST_METHOD'] == "GET"){ 
	
	?>
		<?php include("includes/head.html"); ?>

	<?php
	}else{
		//valido los campos
		if($_POST["user"] == $user && $_POST["password"] == $password){
			$_SESSION["login"] = true;
			$_SESSION["user"] = $user;
			header ("Location: index.php");
		}else{
			?>
			
				<?php include("includes/head.html"); ?>
				<script type="text/javascript">
					$(function(){
						$(".error").html("Introdujo mal los datos");
					})
				</script>
			<?php
		}
	}
?>