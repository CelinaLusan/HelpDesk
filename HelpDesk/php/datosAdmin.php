<?php
	include("conexion.php");
	//Reanudamos la sesión 
	session_start();
	$jsondata = json_decode($_POST["json"]);
	if($jsondata->funcion == "restriccion_red"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM restrinccion_red;";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_restriccion_red"){
		$id_restrinccion_red = $jsondata->id_restrinccion_red;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM restrinccion_red WHERE id_restrinccion_red = '".$id_restrinccion_red."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_restriccion_red"){
		$id_restrinccion_red = $jsondata->id_restrinccion_red;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE restrinccion_red SET id_estado = '".$id_estado."' WHERE id_restrinccion_red = '".$id_restrinccion_red."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	

	#solicitudSoftware
	if($jsondata->funcion == "solicitudSoftware"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM solicitud_software;";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_solicitud_software"){
		$id_solicitud_software = $jsondata->id_solicitud_software;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM solicitud_software WHERE id_solicitud_software = '".$id_solicitud_software."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_solicitud_software"){
		$id_solicitud_software = $jsondata->id_solicitud_software;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE solicitud_software SET id_estado = '".$id_estado."' WHERE id_solicitud_software = '".$id_solicitud_software."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	


	#instalacionSoftware
	if($jsondata->funcion == "instalacionSoftware"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM instalacion_software;";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_instalacion_software"){
		$id_instalacion_software = $jsondata->id_instalacion_software;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM instalacion_software WHERE id_instalacion_software = '".$id_instalacion_software."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}



	if($jsondata->funcion == "getEstado"){
		$id_estado = $jsondata->id_estado;
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM estado WHERE id_estado = '".$id_estado."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "getUser"){
		$id_usuario = $jsondata->id_usuario;
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM usuario WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}

?>