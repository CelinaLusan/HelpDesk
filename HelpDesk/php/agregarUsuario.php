<?php
	include("conexion.php");

	$nombreu = isset($_POST['nombreu']) ? $_POST['nombreu'] : '';
	$c = isset($_POST['contraseniau']) ? $_POST['contraseniau'] : '';
	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$apellidp = isset($_POST['apellidopat']) ? $_POST['apellidopat'] : '';
	$apellidm = isset($_POST['apellidomat']) ? $_POST['apellidomat'] : '';
	$contrsenia = hash_hmac("sha256", $c, "novadesk");
	echo $nombreu."<br>";
	echo $contrsenia."<br>";
	echo $nombre."<br>";
	echo $apellidp."<br>";
	echo $apellidm."<br>";
	
	$query = "INSERT INTO usuario (usuario, nombre, apellido_paterno, apellido_materno, contrasenia, tipo, activo) VALUES ('".$nombreu."','".$nombre."','".$apellidp."','".$apellidm."','".$contrsenia."','2','0');";
	echo $query."<br>";
	$resultado = $mysqli->query($query);
	echo $resultado;
	if($mysqli->affected_rows > 0){
		echo "se hizo";
		header("location:../menuad.php?adduser=true");
	}
	else{
		echo "NO se hizo";	
		header("location:../menuad.php?adduser=false");
	}
?>