<?php
	include("conexion.php");
	if(isset($_GET['id_usuario'])){
		$id_usuario = $_GET['id_usuario'];
	}
	if(isset($_GET['equipo'])){
		$equipo = $_GET['equipo'];
	}
	/*if(isset($_GET['aula'])){
		$aula = $_GET['aula'];
	}*/
	if(isset($_GET['tipo_configuracion'])){
		$tipo_configuracion = $_GET['tipo_configuracion'];
	}
	if(isset($_GET['razon'])){
		$razon = $_GET['razon'];
	}

	echo $id_usuario."<br>";
	echo $equipo."<br>";
	echo $tipo_configuracion."<br>";
	echo $razon."<br>";

	$query = "INSERT INTO equipos_externos(equipo, id_usuario, tipo_configuracion, razon, id_estado) VALUES ('".$equipo."','".$id_usuario."','".$tipo_configuracion."','".$razon."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
?>