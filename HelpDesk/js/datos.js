$(function(){
	eliminarRestrinccion = function (id_restrinccion_red){
		var dat = {
			"id_restrinccion_red"	: id_restrinccion_red, 
			"funcion" 				: "eliminar_restriccion_red"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#restriccionesredClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	$("#restriccionesredClic").click(function(e){
		var dat = {
			"funcion" : "restriccion_red"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				console.log("res");
				var template = "";
				$("#tbodyRestricciones").html("");
				$.each(res, function(key,value){
					id_restrinccion_red = value['id_restrinccion_red'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcarr" + id_restrinccion_red + 
							'</td>'  + 
							'<td>'+
								value['direccion'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					if(value['id_estado'] == 1){
						template += '<td>'+
										'<span class="btn btn-success">Terminada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
										'<span class="btn btn-danger">Pendiente</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 3){
						template += '<td>'+
										'<span class="btn btn-info">En espera</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 4){
						template += '<td>'+
										'<span class="btn btn-primary">Cancelada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
									'<a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';						
					}
					else{
						template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarRestrinccion('+
									id_restrinccion_red +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';

					}
                });
				$("#tbodyRestricciones").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});


	/**
	* Solicitud de software
	**/
	$("#solicitudSoftwareVerClic").click(function(e){
		var dat = {
			"funcion" : "solicitudSoftware"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodySolicitudSoftware").html("");
				$.each(res, function(key,value){
					id_solicitud_software = value['id_solicitud_software'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcass" + id_solicitud_software + 
							'</td>'  + 
							'<td>'+
								value['software'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					if(value['id_estado'] == 1){
						template += '<td>'+
										'<span class="btn btn-success">Terminada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
										'<span class="btn btn-danger">Pendiente</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 3){
						template += '<td>'+
										'<span class="btn btn-primary">Cancelada</span>' +
									'</td>'  ; 
					}
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarSolicitudSoftware('+
									id_solicitud_software +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodySolicitudSoftware").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	eliminarSolicitudSoftware = function (id_solicitud_software){
		var dat = {
			"id_solicitud_software"	: id_solicitud_software, 
			"funcion" 				: "eliminar_solicitud_software"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#solicitudSoftwareVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	/**
	* Instalacion de software
	**/
	$("#instalacionSoftwareVerClic").click(function(e){
		var dat = {
			"funcion" : "instalacionSoftware"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyInstalacionSoftware").html("");
				$.each(res, function(key,value){
					id_instalacion_software = value['id_instalacion_software'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcais" + id_instalacion_software + 
							'</td>'  + 
							'<td>'+
								value['maquina'] +
							'</td>'  + 
							'<td>'+
								value['software'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					if(value['id_estado'] == 1){
						template += '<td>'+
										'<span class="btn btn-success">Terminada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
										'<span class="btn btn-danger">Pendiente</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 3){
						template += '<td>'+
										'<span class="btn btn-primary">Cancelada</span>' +
									'</td>'  ; 
					}
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarInstalacionSoftware('+
									id_instalacion_software +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyInstalacionSoftware").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	eliminarInstalacionSoftware = function (id_instalacion_software){
		var dat = {
			"id_instalacion_software"	: id_instalacion_software, 
			"funcion" 					: "eliminar_instalacion_software"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#instalacionSoftwareVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	/**
	* reporte de daños
	**/
	$("#reporteDaniosVerClic").click(function(e){
		var dat = {
			"funcion" : "reporteDanios"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyReporteDanios").html("");
				$.each(res, function(key,value){
					id_danios_equipo = value['id_danios_equipo'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcardrd" + id_danios_equipo + 
							'</td>'  + 
							'<td>'+
								value['maquina'] +
							'</td>'  + 
							'<td>'+
								value['hora'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					if(value['id_estado'] == 1){
						template += '<td>'+
										'<span class="btn btn-success">Terminada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
										'<span class="btn btn-danger">Pendiente</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 3){
						template += '<td>'+
										'<span class="btn btn-primary">Cancelada</span>' +
									'</td>'  ; 
					}
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarReporteDanios('+
									id_danios_equipo +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyReporteDanios").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	eliminarReporteDanios = function (id_danios_equipo){
		var dat = {
			"id_danios_equipo"	: id_danios_equipo, 
			"funcion" 			: "eliminar_danios_equipo"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#reporteDaniosVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	

	/**
	* plataformas virtuales
	**/
	$("#plataformasVirtualesVerClic").click(function(e){
		var dat = {
			"funcion" : "plataformasVirtuales"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyPlataformasVirtuales").html("");
				$.each(res, function(key,value){
					id_plataformas_virtuales = value['id_plataformas_virtuales'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcardpv" + id_plataformas_virtuales + 
							'</td>'  + 
							'<td>'+
								value['falla'] +
							'</td>'  + 
							'<td>'+
								value['id_aula'] +
							'</td>'  + 
							'<td>'+
								value['maquina'] +
							'</td>'  + 
							'<td>'+
								value['hora'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					if(value['id_estado'] == 1){
						template += '<td>'+
										'<span class="btn btn-success">Terminada</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 2){
						template += '<td>'+
										'<span class="btn btn-danger">Pendiente</span>' +
									'</td>'  ; 
					}
					if(value['id_estado'] == 3){
						template += '<td>'+
										'<span class="btn btn-primary">Cancelada</span>' +
									'</td>'  ; 
					}
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarPlataformasVirtuales('+
									id_plataformas_virtuales +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyPlataformasVirtuales").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	eliminarPlataformasVirtuales = function (id_plataformas_virtuales){
		var dat = {
			"id_plataformas_virtuales"	: id_plataformas_virtuales, 
			"funcion" 			: "eliminar_plataformas_virtuales"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datos.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#reporteDaniosVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	
});
