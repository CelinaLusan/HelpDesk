<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$aula = isset($_POST['aula']) ? $_POST['aula'] : '';
	$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
	$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
	
	echo $id_usuario."<br>";
	echo $aula."<br>";
	echo $direccion."<br>";
	echo $hora."<br>";
	echo $descripcion."<br>";

	$query = "SELECT id_aula FROM aula WHERE aula = '".$aula."'";
	$resultado = $mysqli->query($query);
	$row = $resultado->fetch_assoc();
	$id_aula = $row['id_aula'];

	$query = "INSERT INTO restrinccion_red (id_aula, id_usuario, direccion, descripcion, hora, id_estado) VALUES ('".$id_aula."','".$id_usuario."','".$direccion."','".$descripcion."','".$hora."','1');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuUser.php?restrinccion_red=true");
	}
	else{
		header("location:../menuUser.php?restrinccion_red=false");
		echo "NO se hizo";	
	}
?>