<?php
	include("conexion.php");
	#if($row['contrasenia'] === hash_hmac("sha256", $password, "novadesk")){
	$id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
	$contraseñaActual = isset($_POST['contraseñaActual']) ? $_POST['contraseñaActual'] : '';
	$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
	$contraseña2 = isset($_POST['contraseña2']) ? $_POST['contraseña2'] : '';
	$in = isset($_GET['in']) ? $_GET['in'] : '';
	
	echo $contraseñaActual."<br>";
	echo $contraseña."<br>";
	echo $contraseña2."<br>";

	$query = "UPDATE usuario SET contrasenia = '". hash_hmac("sha256", $contraseña, "novadesk") ."' WHERE id_usuario = '". $id_usuario ."';";
	$resultado = $mysqli->query($query);
	if($in == true){
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser-in.php-in?password=true");
		}
		else{
			header("location:../menuUser-in.php-in?password=false");
			echo "NO se hizo";	
		}
	}
	else{
		if($mysqli->affected_rows > 0){
			echo "se hizo";
			header("location:../menuUser.php?password=true");
		}
		else{
			header("location:../menuUser.php?password=false");
			echo "NO se hizo";	
		}
	}
?>