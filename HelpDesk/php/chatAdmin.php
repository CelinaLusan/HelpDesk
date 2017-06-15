<?php
	include("conexion.php");
	//Reanudamos la sesión 
	session_start();
	$jsondata = json_decode($_POST["json"]);
	if($jsondata->funcion == "setmensaje"){
		$id_usuario = $jsondata->id_usuario;
		$nom_user = $_SESSION['usuario'];
		if($_SESSION['usuario']=="admin"){
			$envio = 0;
		}else{
			$envio = 1;
		}
		$mensaje = $jsondata->mensaje;
		$hora = date('H:i:s');
		$fecha = date('Y-m-d');
		$query = "INSERT INTO chat ( id_usuario, nom_user, envio, mensaje, hora, fecha) VALUES ('".$id_usuario."', '".$nom_user."', '".$envio."', '".$mensaje."', '".$hora."', '".$fecha."');";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "getusers"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM usuario WHERE usuario != 'admin';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "getchats"){
		$id_usuario = $jsondata->id_usuario;
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM chat WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
?>