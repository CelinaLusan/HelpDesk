<?php
	include("conexion.php");
	if(isset($_GET['usuario'])){
		$usuario = $_GET['usuario'];
	}
	if(isset($_GET['password'])){
		$password = $_GET['password'];
	}

	
	$query = "SELECT * FROM usuario WHERE usuario = '".$usuario."';";
	echo $query;
	$resultado = $mysqli->query($query);

	$row = $resultado->fetch_assoc();
	if($row['contrasenia'] === hash_hmac("sha256", $password, "novadesk")){
		session_start();
		$_SESSION['usuario'] = $row['nombre'];
		$_SESSION['user'] = $row['usuario'];
		$_SESSION['tipo'] = $row['tipo'];
		$_SESSION['id_usuario'] = $row['id_usuario'];
		$_SESSION['activo'] = $row['activo'];
		$query = "UPDATE usuario SET activo = '1' WHERE id_usuario = '".$row['id_usuario']."';";
		$resultado = $mysqli->query($query);
		if($row['tipo'] == 1){
			header('Location: ../menuad.php');	
		}
		else{
			header('Location: ../menuUser.php');	
		}
	}
	else{
		header('Location: ../index.php?error=true');	
	}

?>