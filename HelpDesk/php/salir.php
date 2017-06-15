<?php
	include("conexion.php");
	//Reanudamos la sesión 
	session_start(); 
	//Literalmente la destruimos
	$query = "UPDATE usuario SET activo = '0' WHERE id_usuario = '".$_SESSION['id_usuario']."';";
	$resultado = $mysqli->query($query); 
	session_destroy(); 
	//Redireccionamos a index.php (al inicio de sesión) 
	header("Location: ../index.php"); 
?>