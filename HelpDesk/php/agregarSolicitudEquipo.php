<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$nombre_equipo = isset($_POST['nombreequipo']) ? $_POST['nombreequipo'] : '';
	$fechainicio = isset($_POST['fechainicio']) ? $_POST['fechainicio'] : '';
	$fechafin = isset($_POST['fechafin']) ? $_POST['fechafin'] : '';
	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
	$lugar = isset($_POST['lugar']) ? $_POST['lugar'] : '';
	$in = isset($_GET['in']) ? $_GET['in'] : '';
	
	echo $id_usuario."<br>";
	echo $nombre_equipo."<br>";
	echo $fechainicio."<br>";
	echo $fechafin."<br>";
	echo $descripcion."<br>";
	echo $lugar."<br>";
	
	$query = "INSERT INTO solicitud_equipo (nombre_equipo, fecha_inicio, fecha_fin, lugar, descripcion, id_usuario, id_estado) VALUES ('".$nombre_equipo."','".$fechainicio."','".$fechafin."','".$lugar."','".$descripcion."','".$id_usuario."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($in == true){
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser-in.php?solicitud_equipo=true");
		}
		else{
			echo "NO se hizo";	
			header("location:../menuUser-in.php?solicitud_equipo=false");
		}
	}
	else{
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser.php?solicitud_equipo=true");
		}
		else{
			echo "NO se hizo";	
			header("location:../menuUser.php?solicitud_equipo=false");
		}
	}
?>