<?php
	include("conexion.php");

	$nombreu = isset($_POST['nombreu']) ? $_POST['nombreu'] : '';
	$query = "DELETE FROM usuario WHERE usuario='".$nombreu."';";
	//$query = "INSERT INTO usuario (usuario, nombre, apellido_paterno, apellido_materno, contrasenia, tipo, activo) VALUES ('".$nombreu."','".$nombre."','".$apellidp."','".$apellidm."','".$contrsenia."','2','0');";
	echo $query."<br>";
	$resultado = $mysqli->query($query);
	echo $resultado;
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuad.php?deluser=true");
	}
	else{
		echo "NO se hizo";	
		header("location:../menuad.php?deluser=false");
	}
?>