$(function(){
	eliminarRestrinccion = function (id_restrinccion_red){
		var dat = {
			"id_restrinccion_red"	: id_restrinccion_red, 
			"funcion" 				: "eliminar_restriccion_red"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
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
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyRestricciones").html("");
				$.each(res, function(key,value){
					id_restrinccion_red = value['id_restrinccion_red'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;					

					template += '<tr>'+
							'<td>'+
								"nuhdvcarr" + id_restrinccion_red + 
							'</td>'  +
							'<td>'+
								usuario + 
							'</td>'  +
							'<td>'+
								value['direccion'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>' +
							'<td>'+
								value['hora'] + 
							'</td>'  ;
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioRestriccionRed(this,'+value['id_restrinccion_red']+')" title="'+value['id_restrinccion_red']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarRestrinccion('+
									id_restrinccion_red +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyRestricciones").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	cambioRestriccionRed = function(e,id_restrinccion_red){
		estado = e.value;
		var dat = {
			"id_restrinccion_red" 	: id_restrinccion_red,
			"estado" 				: estado,
			"funcion" 				: "update_restriccion_red"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	


	/**
	* Solicitud de software
	**/
	$("#solicitudSoftwareVerClic").click(function(e){
		var dat = {
			"funcion" : "solicitudSoftware"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodySolicitudSoftware").html("");
				$.each(res, function(key,value){
					id_solicitud_software = value['id_solicitud_software'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					template += '<tr>'+
							'<td>'+
								"nuhdvcass" + id_solicitud_software + 
							'</td>'  + 
							'<td>'+
								usuario +
							'</td>'  + 
							'<td>'+
								value['software'] +
							'</td>'  + 
							'<td>'+
								value['descripcion'] +
							'</td>'; 
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioSolicitudSoftware(this,'+value['id_solicitud_software']+')" title="'+value['id_solicitud_software']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template +=									
									'</select>'+
								'</td>'; 
					
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
			url : "php/datosAdmin.php",
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
	cambioSolicitudSoftware = function(e,id_solicitud_software){
		estado = e.value;
		var dat = {
			"id_solicitud_software"	: id_solicitud_software,
			"estado" 				: estado,
			"funcion" 				: "update_solicitud_software"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
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
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyInstalacionSoftware").html("");
				$.each(res, function(key,value){
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					
					id_instalacion_software = value['id_instalacion_software'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcais" + id_instalacion_software + 
							'</td>'  + 
							'<td>'+
								usuario +
							'</td>'  + 
							'<td>'+
								value['id_aula'] +
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
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioInstalacionSoftware(this,'+value['id_instalacion_software']+')" title="'+value['id_instalacion_software']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
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
			url : "php/datosAdmin.php",
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

	cambioInstalacionSoftware = function(e,id_instalacion_software){
		estado = e.value;
		var dat = {
			"id_instalacion_software"	: id_instalacion_software,
			"estado" 				: estado,
			"funcion" 				: "update_instalacion_software"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};


	/**
	* Reporte danios
	**/
	$("#reporteDaniosVerClic").click(function(e){
		var dat = {
			"funcion" : "reporteDanios"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				console.log(res);
				var template = "";
				$("#tbodyReporteDanios").html("");
				$.each(res, function(key,value){
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					
					id_danios_equipo = value['id_danios_equipo'];
					template += '<tr>'+
							'<td>'+
								"nuhdvcard" + id_danios_equipo + 
							'</td>'  + 
							'<td>'+
								usuario +
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
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioReporteDanios(this,'+value['id_danios_equipo']+')" title="'+value['id_danios_equipo']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
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
			"funcion" 					: "eliminar_danios_equipo"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
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

	cambioReporteDanios = function(e,id_danios_equipo){
		estado = e.value;
		var dat = {
			"id_danios_equipo"		: id_danios_equipo,
			"estado" 				: estado,
			"funcion" 				: "update_reporte_danios"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};


	/**
	* Solicitud de equipo
	**/
	$("#solicitudEquipoVerClic").click(function(e){
		var dat = {
			"funcion" : "solicitudEquipo"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodySolicitudEquipo").html("");
				$.each(res, function(key,value){
					id_solicitud_equipo = value['id_solicitud_equipo'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					template += '<tr>'+
							'<td>'+
								"nuhdvcase" + id_solicitud_equipo + 
							'</td>'  + 
							'<td>'+
								usuario +
							'</td>'  + 
							'<td>'+
								value['nombre_equipo'] +
							'</td>'  + 
							'<td>'+
								value['fecha_inicio'] +
							'</td>'  + 
							'<td>'+
								value['fecha_fin'] +
							'</td>'  +  
							'<td>'+
								value['descripcion'] +
							'</td>'  +
							'<td>'+
								value['lugar'] +
							'</td>'; 
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioSolicitudEquipo(this,'+value['id_solicitud_equipo']+')" title="'+value['id_solicitud_equipo']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template +=									
									'</select>'+
								'</td>'; 
					
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarSolicitudEquipo('+
									id_solicitud_equipo +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodySolicitudEquipo").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	eliminarSolicitudEquipo = function (id_solicitud_equipo){
		var dat = {
			"id_solicitud_equipo"	: id_solicitud_equipo, 
			"funcion" 				: "eliminar_solicitud_equipo"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#solicitudEquipoVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	cambioSolicitudEquipo = function(e,id_solicitud_equipo){
		estado = e.value;
		var dat = {
			"id_solicitud_equipo"	: id_solicitud_equipo,
			"estado" 				: estado,
			"funcion" 				: "update_solicitud_equipo"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};


	/**
	* Plataformas virtuales
	**/
	$("#plataformasVirtualesVerClic").click(function(e){
		var dat = {
			"funcion" : "plataformasVirtuales"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyPlataformasVirtuales").html("");
				$.each(res, function(key,value){
					id_plataformas_virtuales = value['id_plataformas_virtuales'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					template += '<tr>'+
							'<td>'+
								"nuhdvcapv" + id_plataformas_virtuales + 
							'</td>'  + 
							'<td>'+
								usuario +
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
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioPlataformasVirtuales(this,'+value['id_plataformas_virtuales']+')" title="'+value['id_plataformas_virtuales']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template +=									
									'</select>'+
								'</td>'; 
					
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
			"funcion" 				: "eliminar_plataformas_virtuales"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#plataformasVirtualesVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	cambioPlataformasVirtuales = function(e,id_plataformas_virtuales){
		estado = e.value;
		var dat = {
			"id_plataformas_virtuales"	: id_plataformas_virtuales,
			"estado" 				: estado,
			"funcion" 				: "update_plataformas_virtuales"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	/**
	* CuentasUsuario
	* password
	**/
	$("#cuentasUsuarioVerClic").click(function(e){
		cuentasView();
		passwordView();
	});

	cuentasView = function(){
		var dat = {
			"funcion" : "cuentasUsuario"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyCuentasUsuario").html("");
				$.each(res, function(key,value){
					id_cuenta = value['id_cuenta'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					template += '<tr>'+
							'<td>'+
								"nuhdvcacu" + id_cuenta + 
							'</td>'  + 
							'<td>'+
								usuario +
							'</td>'  + 
							'<td>'+
								value['cuenta'] +
							'</td>'  + 
							'<td>'+
								value['tipo'] +
							'</td>'  + 
							'<td>'+
								value['nombre'] +
							'</td>'  +  
							'<td>'+
								value['usuario'] +
							'</td>'  +
							'<td>'+
								value['razon'] +
							'</td>'; 
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioCuenta(this,'+value['id_cuenta']+')" title="'+value['id_cuenta']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template +=									
									'</select>'+
								'</td>'; 
					
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarCuenta('+
									id_cuenta +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyCuentasUsuario").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	passwordView = function(){
		var dat = {
			"funcion" : "password"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#tbodyPassword").html("");
				$.each(res, function(key,value){
					id_restablecer = value['id_restablecer'];
					var dat = {
						"id_usuario"	: value['id_usuario'], 
						"funcion"		: "getUser"
					}
					var jsonC = JSON.stringify(dat);
					var res = $.ajax({
						async:false, 
						url : "php/datosAdmin.php",
						type : "POST",
						data : 'json=' + jsonC,
						dataType: "json",
						success : function(res){
							return res;
						},
					    error: function (errorThrown) {
					    	alert("error");
					    }
					});

					var a = res.responseJSON;
					var usuario = a[0].nombre;
					template += '<tr>'+
							'<td>'+
								"nuhdvcarc" + id_restablecer + 
							'</td>'  + 
							'<td>'+
								usuario +
							'</td>'  + 
							'<td>'+
								value['usuario'] +
							'</td>'; 
					template += '<td>'+
									'<select id="restriccion_redSelect" onChange="cambioPassword(this,'+value['id_restablecer']+')" title="'+value['id_restablecer']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Es espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "En espera" + '</option>'+ 
										'<option value="4">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 4){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "En espera" + '</option>'+ 
										'<option value="4" selected="">' + "Cancelada" + '</option>';
							}
					template +=									
									'</select>'+
								'</td>'; 
					template +=									
									'</select>'+
								'</td>'; 
					
					template += '<td>'+
									'<a href="#" class="btn btn-danger" onclick="eliminarPassword('+
									id_restablecer +');"><i class="fa fa-trash-o"></i> Eliminar</a>'+
								'</td>'  + 
							'</tr>';
                });
				$("#tbodyPassword").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	eliminarCuenta = function (id_cuenta){
		var dat = {
			"id_cuenta"	: id_cuenta, 
			"funcion" 				: "eliminar_cuenta_usuario"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#cuentasUsuarioVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	cambioCuenta = function(e,id_cuenta){
		estado = e.value;
		var dat = {
			"id_cuenta"	: id_cuenta,
			"estado" 				: estado,
			"funcion" 				: "update_cuenta_usuario"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};

	eliminarPassword = function (id_restablecer){
		var dat = {
			"id_restablecer"	: id_restablecer, 
			"funcion" 			: "eliminar_password"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				alert("Elimanada con exito!");
				$("#cuentasUsuarioVerClic").click();
			},
			error : function(res){
				console.log(res);
			}
		});
	};
	cambioPassword = function(e,id_restablecer){
		estado = e.value;
		var dat = {
			"id_restablecer"	: id_restablecer,
			"estado" 				: estado,
			"funcion" 				: "update_password"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/datosAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
			},
			error : function(res){
				console.log(res);
			}
		});
	};




	$('#EliminarCuenta').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarCuentaTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarPlataformasVirtuales').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarPlataformasVirtualesTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarSolicitudEquipo').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarSolicitudEquipoTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarDaniosEquipo').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarDaniosEquipoTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarInstalacionSoftware').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarInstalacionSoftwareTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarSolicitudSoftware').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarSolicitudSoftwareTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});
	$('#eliminarRestriccionRed').click(function(){
		var desea = confirm("¿Desea eliminar todo?");
		if(desea == true){
			var dat = {
				"funcion" 			: "eliminarRestriccionRedTodo"
			}
			var jsonC = JSON.stringify(dat);
			console.log(jsonC);
			$.ajax({
				url : "php/datosAdmin.php",
				type : "POST",
				data : 'json=' + jsonC,
				dataType: "json",
				success : function(res){
					alert("Datos eliminados!");
				},
				error : function(res){
					console.log(res);
				}
			});
		}
	});

	
});
