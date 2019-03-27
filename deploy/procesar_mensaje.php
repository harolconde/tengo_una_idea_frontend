<?php

	session_start();
	if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
		print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
    }
	
	$host_db="localhost";//nombre del servidor
	$user_db="root";//nombre de usuario
	$pass_db="";//contraseña
	$bd_name="db_novatecideas";//nombre de mi base de datos
 
 
	$conexion=new mysqli($host_db, $user_db, $pass_db, $bd_name);
	if ($conexion -> connect_error) {
		die("La conexion fallo". $conexion -> connect_error);
	}

	$valor_usuario=$_SESSION["user_id"];
	
	$insertar="INSERT INTO ideas (id_user, argumento) VALUES ('".$valor_usuario."','".$_POST["argumento"]."')"; //,"
    
	if ($conexion -> query($insertar) == true) {
		?>
 
		<script language="JavaScript">
		
			alert("idea enviada correctamente");
			window.location.href='home.php';
		</script>
 
		<?php
	}
?>