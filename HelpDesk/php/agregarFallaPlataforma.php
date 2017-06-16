<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$aula = isset($_POST['aula']) ? $_POST['aula'] : '';
	$falla = isset($_POST['falla']) ? $_POST['falla'] : '';
	$maquina = isset($_POST['maquina']) ? $_POST['maquina'] : '';
	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
	$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
	
	echo $id_usuario."<br>";
	echo $aula."<br>";
	echo $maquina."<br>";
	echo $falla."<br>";
	echo $descripcion."<br>";
	echo $hora."<br>";

	$query = "SELECT id_aula FROM aula WHERE aula = '".$aula."'";
	$resultado = $mysqli->query($query);
	$row = $resultado->fetch_assoc();
	$id_aula = $row['id_aula'];

	$query = "INSERT INTO plataformas_virtuales (falla, id_aula, maquina, hora, descripcion, id_usuario, id_estado) VALUES ('".$falla."','".$id_aula."','".$maquina."','".$hora."','".$descripcion."','".$id_usuario."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuUser.php?plataformas_virtuales=true");
	}
	else{
		header("location:../menuUser.php?plataformas_virtuales=false");
		echo "NO se hizo";	
	}
?>