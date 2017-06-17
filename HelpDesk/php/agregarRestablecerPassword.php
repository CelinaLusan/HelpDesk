<?php
	include("conexion.php");

	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';

	echo $id_usuario."<br>";
	echo $usuario."<br>";

	$query = "INSERT INTO restablecer (usuario, id_usuario, id_estado) VALUES ('".$usuario."','".$id_usuario."','3');";
	echo $query;
	$resultado = $mysqli->query($query);
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuUser.php?restablecer=true");
	}
	else{
		header("location:../menuUser.php?restablecer=false");
		echo "NO se hizo";	
	}
?>