<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$aula = isset($_POST['aula']) ? $_POST['aula'] : '';
	$software = isset($_POST['software']) ? $_POST['software'] : '';
	$maquina = isset($_POST['maquina']) ? $_POST['maquina'] : '';
	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
	
	echo $id_usuario."<br>";
	echo $aula."<br>";
	echo $maquina."<br>";
	echo $software."<br>";
	echo $descripcion."<br>";

	$query = "SELECT id_aula FROM aula WHERE aula = '".$aula."'";
	$resultado = $mysqli->query($query);
	$row = $resultado->fetch_assoc();
	$id_aula = $row['id_aula'];

	$query = "INSERT INTO instalacion_software (id_aula, id_usuario, maquina, descripcion, software, id_estado) VALUES ('".$id_aula."','".$id_usuario."','".$maquina."','".$descripcion."','".$software."','1');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuUser.php?instalacion_software=true");
	}
	else{
		header("location:../menuUser.php?instalacion_software=false");
		echo "NO se hizo";	
	}
?>