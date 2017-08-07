<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$software = isset($_POST['software']) ? $_POST['software'] : '';
	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
	$in = isset($_GET['in']) ? $_GET['in'] : '';
	
	echo $id_usuario."<br>";
	echo $software."<br>";
	echo $descripcion."<br>";

	$query = "INSERT INTO solicitud_software (software, descripcion, id_usuario, id_estado) VALUES ('".$software."','".$descripcion."','".$id_usuario."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($in == true){
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser-in.php?solicitud_software=true");
		}
		else{
			echo "NO se hizo";	
			header("location:../menuUser-in.php?solicitud_software=false");
		}
	}
	else{
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser.php?solicitud_software=true");
		}
		else{
			echo "NO se hizo";	
			header("location:../menuUser.php?solicitud_software=false");
		}
	}
?>