<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$cuenta = isset($_POST['cuenta']) ? $_POST['cuenta'] : '';
	$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
	$razon = isset($_POST['razon']) ? $_POST['razon'] : '';
	
	echo $id_usuario."<br>";
	echo $cuenta."<br>";
	echo $tipo."<br>";
	echo $nombre."<br>";
	echo $razon."<br>";
	
	$query = "INSERT INTO cuenta (cuenta, tipo, nombre, usuario, id_usuario, id_estado) VALUES ('".$cuenta."','".$tipo."','".$nombre."','".$usuario."','".$id_usuario."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuUser.php?cuenta=true");
	}
	else{
		echo "NO se hizo";	
		header("location:../menuUser.php?cuenta=false");
	}
?>