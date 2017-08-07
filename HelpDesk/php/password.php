<?php
	include("conexion.php");
	$jsondata = json_decode($_POST["json"]);
	if($jsondata->funcion == "contraseñaActual"){
		$id_usuario = $jsondata->id_usuario;
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM usuario WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		$row = mysqli_fetch_array($resultado);
	    if($row['contrasenia'] === hash_hmac("sha256", $jsondata->password, "novadesk")){
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
?>