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
									'<select id="restriccion_redSelect" title="'+value['id_restrinccion_red']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "Cancelada" + '</option>';
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
                selectCambiar();
				$("#tbodyRestricciones").html(template);
			},
			error : function(res){
				console.log(res);
			}
		});
	});

	/*.change(function(){
		console.log("aqui");
	}).change();
	$('select').on('change',function(e){
		console.log("ww");
	});*/
	
	var selectCambiar = function(){
		console.log("entra");
		$('#restriccion_redSelect').change(function(){console.log("hola");}).change();
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
									'<select id="solicitud_softwareSelect" title="'+value['id_solicitud_software']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "Cancelada" + '</option>';
							}
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
			url : "php/datosAdmin.php",
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
								"nuhdvcass" + id_instalacion_software + 
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
									'<select id="instalacion_softwareSelect" title="'+value['id_instalacion_software']+'">';
							if(value['id_estado'] == 1){
								template +='<option selected="" value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 2){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option selected="" value="2">' + "Pendiente" + '</option>'+ 
										'<option value="3">' + "Cancelada" + '</option>';
							}
							if(value['id_estado'] == 3){
								template +='<option value="1">' + "Terminada" + '</option>'+ 
										'<option value="2">' + "Pendiente" + '</option>'+ 
										'<option selected="" value="3">' + "Cancelada" + '</option>';
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

	
});
