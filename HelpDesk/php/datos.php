<?php
	include("conexion.php");
	//Reanudamos la sesión 
	session_start();
	$jsondata = json_decode($_POST["json"]);
	if($jsondata->funcion == "restriccion_red"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM restrinccion_red WHERE id_usuario = '".$id_usuario."';";
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

	#solicitudSoftware
	if($jsondata->funcion == "solicitudSoftware"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM solicitud_software WHERE id_usuario = '".$id_usuario."';";
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

	#instalacionSoftware
	if($jsondata->funcion == "instalacionSoftware"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM instalacion_software WHERE id_usuario = '".$id_usuario."';";
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

	#reporteDanios
	if($jsondata->funcion == "reporteDanios"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM danios_equipo WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_danios_equipo"){
		$id_danios_equipo = $jsondata->id_danios_equipo;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM danios_equipo WHERE id_danios_equipo = '".$id_danios_equipo."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#solicitudes equipo
	if($jsondata->funcion == "solicitudEquipo"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM solicitud_equipo WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_solicitud_equipo"){
		$id_solicitud_equipo = $jsondata->id_solicitud_equipo;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM solicitud_equipo WHERE id_solicitud_equipo = '".$id_solicitud_equipo."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#plataformasVirtuaales
	if($jsondata->funcion == "plataformasVirtuales"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM plataformas_virtuales WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_plataformas_virtuales"){
		$id_plataformas_virtuales = $jsondata->id_plataformas_virtuales;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM plataformas_virtuales WHERE id_plataformas_virtuales = '".$id_plataformas_virtuales."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#cuenta
	if($jsondata->funcion == "cuenta"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM cuenta WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_cuenta"){
		$id_cuenta = $jsondata->id_cuenta;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM cuenta WHERE id_cuenta = '".$id_cuenta."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#restablecer
	if($jsondata->funcion == "restablecer"){
		$id_usuario = $_SESSION['id_usuario'];
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM restablecer WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_password"){
		$id_restablecer = $jsondata->id_restablecer;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM restablecer WHERE id_restablecer = '".$id_restablecer."'";
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

	if($jsondata->funcion == "eliminarCuentaTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM cuenta WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		$query = "DELETE FROM restablecer WHERE id_usuario = '".$id_usuario."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarPlataformasVirtualesTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM plataformas_virtuales WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarSolicitudEquipoTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM solicitud_equipo WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarDaniosEquipoTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM danios_equipo WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarSolicitudSoftwareTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM solicitud_software WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarInstalacionSoftwareTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM instalacion_software WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarRestriccionRedTodo"){
		$id_usuario = $_SESSION['id_usuario'];
		$query = "DELETE FROM restrinccion_red WHERE id_usuario = '".$id_usuario."'";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}



?>