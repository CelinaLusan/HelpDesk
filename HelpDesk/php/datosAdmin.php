<?php
	include("conexion.php");
	//Reanudamos la sesión 
	session_start();
	$jsondata = json_decode($_POST["json"]);

	if($jsondata->funcion == "buscarByUsuario"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM usuario WHERE usuario LIKE '%". $jsondata->dato ."%';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "buscarRestricciones"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM restrinccion_red WHERE id_usuario = '".$jsondata->id_usuario."';";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	
	

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
	if($jsondata->funcion == "update_instalacion_software"){
		$id_instalacion_software = $jsondata->id_instalacion_software;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE instalacion_software SET id_estado = '".$id_estado."' WHERE id_instalacion_software = '".$id_instalacion_software."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}


	#reporteDanios
	if($jsondata->funcion == "reporteDanios"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM danios_equipo;";
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
	if($jsondata->funcion == "update_reporte_danios"){
		$id_danios_equipo = $jsondata->id_danios_equipo;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE danios_equipo SET id_estado = '".$id_estado."' WHERE id_danios_equipo = '".$id_danios_equipo."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#solicitudEquipo
	if($jsondata->funcion == "solicitudEquipo"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM solicitud_equipo;";
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
		$query = "DELETE FROM solicitud_equipo WHERE id_solicitud_equipo = '".$id_solicitud_equipo."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_solicitud_equipo"){
		$id_solicitud_equipo = $jsondata->id_solicitud_equipo;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE solicitud_equipo SET id_estado = '".$id_estado."' WHERE id_solicitud_equipo = '".$id_solicitud_equipo."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#plataformasVirtuales
	if($jsondata->funcion == "plataformasVirtuales"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM plataformas_virtuales;";
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
		$query = "DELETE FROM plataformas_virtuales WHERE id_plataformas_virtuales = '".$id_plataformas_virtuales."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_plataformas_virtuales"){
		$id_plataformas_virtuales = $jsondata->id_plataformas_virtuales;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE plataformas_virtuales SET id_estado = '".$id_estado."' WHERE id_plataformas_virtuales = '".$id_plataformas_virtuales."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#cuentasUsuario
	if($jsondata->funcion == "cuentasUsuario"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM cuenta;";
		$resultado = $mysqli->query($query);
		while($row = mysqli_fetch_array($resultado))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }
		echo json_encode($rawdata);
	}
	if($jsondata->funcion == "eliminar_cuenta_usuario"){
		$id_cuenta = $jsondata->id_cuenta;
		$rawdata = array();
		$i=0;
		$query = "DELETE FROM cuenta WHERE id_cuenta = '".$id_cuenta."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_cuenta_usuario"){
		$id_cuenta = $jsondata->id_cuenta;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE cuenta SET id_estado = '".$id_estado."' WHERE id_cuenta = '".$id_cuenta."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

	#password
	if($jsondata->funcion == "password"){
		$rawdata = array();
		$i=0;
		$query = "SELECT * FROM restablecer;";
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
		$query = "DELETE FROM restablecer WHERE id_restablecer = '".$id_restablecer."';";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "update_password"){
		$id_restablecer = $jsondata->id_restablecer;
		$id_estado = $jsondata->estado;
		$rawdata = array();
		$i=0;
		$query = "UPDATE restablecer SET id_estado = '".$id_estado."' WHERE id_restablecer = '".$id_restablecer."';";
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



	if($jsondata->funcion == "eliminarCuentaTodo"){
		$query = "DELETE FROM cuenta;";
		$resultado = $mysqli->query($query);
		$query = "DELETE FROM restablecer;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarPlataformasVirtualesTodo"){
		$query = "DELETE FROM plataformas_virtuales;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarSolicitudEquipoTodo"){
		$query = "DELETE FROM solicitud_equipo;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarDaniosEquipoTodo"){
		$query = "DELETE FROM danios_equipo;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarSolicitudSoftwareTodo"){
		$query = "DELETE FROM solicitud_software;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarInstalacionSoftwareTodo"){
		$query = "DELETE FROM instalacion_software;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}
	if($jsondata->funcion == "eliminarRestriccionRedTodo"){
		$query = "DELETE FROM restrinccion_red;";
		$resultado = $mysqli->query($query);
		echo json_encode($resultado);
	}

?>