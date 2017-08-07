<?php
	include("conexion.php");

	$jsondata = json_decode($_POST["json"]);

	//$c = isset($_POST['contraseniau']) ? $_POST['contraseniau'] : '';
	//$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
	//$apellidp = isset($_POST['apellidopat']) ? $_POST['apellidopat'] : '';
	//$apellidm = isset($_POST['apellidomat']) ? $_POST['apellidomat'] : '';
	//$contrsenia = hash_hmac("sha256", $c, "novadesk");
	//echo $nombreusuario."<br>";
	//echo $nombreusuariou."<br>";
	//echo $contrsenia."<br>";
	//echo $nombre."<br>";
	//echo $apellidpat."<br>";
	//echo $apellidmat."<br>";
	if($jsondata->funcion == "updateuser"){
		$nombreusuario = $jsondata->nombreusuario;
		$nombreusuariou = $jsondata->nombreusuariou;
		$nombre = $jsondata->nombre;
		$apellidopat = $jsondata->apellidopate;
		$apellidomat = $jsondata->apellidomate;
		$contrsenia = hash_hmac("sha256", $nombreusuariou, "novadesk");
		
		if($jsondata->restablecer == true){
			$query = "UPDATE usuario SET usuario='".$nombreusuariou."', nombre = '".$nombre."',apellido_paterno= '".$apellidopat."',apellido_materno='".$apellidomat."',contrasenia='".$contrsenia."' WHERE usuario = '".$nombreusuario."';";
		}else{
			$query = "UPDATE usuario SET usuario='".$nombreusuariou."', nombre = '".$nombre."',apellido_paterno= '".$apellidopat."',apellido_materno='".$apellidomat."' WHERE usuario = '".$nombreusuario."';";
		}
		//echo json_encode($query);
		//echo $query."<br>";
		$resultado = $mysqli->query($query);
		//echo $resultado;
		//$resultado = $mysqli->query($query);
		echo json_encode('{"status" : "ok"}');
	}

	if($jsondata->funcion == "buscaruserfunct"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM usuario WHERE usuario='".$jsondata->nombreusuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}

	//$query = "INSERT INTO usuario (usuario, nombre, apellido_paterno, apellido_materno, contrasenia, tipo, activo) VALUES ('".$nombreu."','".$nombre."','".$apellidp."','".$apellidm."','".$contrsenia."','2','0');";
	
?>