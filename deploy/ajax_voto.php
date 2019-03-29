<?php
require_once("config.php");
if($_POST)
{
	$voto = trim($_POST["votos"]);
	$id = filter_var(trim($_POST["id_user"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	
	if (isset($_COOKIE["votado_".$id]))
	{
		echo "voto_duplicado";
	}
	else
	{
		$total_votos=$db->query("select ".$voto." from ideas WHERE id_user='$id' limit 1");
		if ($fila=$total_votos->fetch_array()) $numero=$fila[$voto];
		
		$votado=$db->query("UPDATE ideas SET ".$voto."=".$voto."+1 WHERE id_user='$id'");
		setcookie("votado_".$id, 1, time()+7200);
		echo ($numero+1);
	}

}
?>