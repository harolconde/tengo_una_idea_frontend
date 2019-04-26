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

	$usuario_id = $_SESSION["user_id"];
	$comentario = $_SESSION["reply_ideas"];

    $id_idea = $_POST["comentario"];
    
    $insertarComentario ="INSERT INTO comentarios (`id_user`,`id_Idea`, `comentario`)
    VALUES ('".$_SESSION["user_id"]."','".$_REQUEST["id_idea"]."','".$comentario."')";
    
	if ($conexion -> query($insertarComentario) == true) {

	}
?>