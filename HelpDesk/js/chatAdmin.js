$(function(){
	function getUsers(){
		var dat = {
			"funcion" : "getusers"
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/chatAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#listaUsers").html("");
				$.each(res, function(key,value){
					if(value['activo'] == 1){
						template += '<li><a href="#" class="addClass" title="'+
						value['id_usuario']+
						'"><i class="fa fa-user green"></i>' + 
							value['nombre']+
							'<span class="fa fa-comments"></span></a></li>'
						;	
					}
					else{
						template += '<li><a href="#" class="addClass" title="'+
						value['id_usuario']+
						'"><i class="fa fa-user"></i>' + 
							value['nombre']+
							'<span class="fa fa-comments"></span></a></li>'
						;	
					}
				});
				$("#listaUsers").html(template);
				var genchat = new genChat();
				//$("#cuerpomensajes").animate({ scrollTop: $('#cuerpomensajes')[0].scrollHeight}, 1000);
			},
			error : function(res){
				console.log(res);
			}
		});
	}
	function genChat(){
		$(".addClass").click(function (e) {
        	$('#qnimate').addClass('popup-box-on');
        	id_usuario = e['originalEvent'].target.title;
        	
        	$("#id_usuario").html(id_usuario);
        	getchat(id_usuario);
        	setInterval(function(){getchat(id_usuario);},1000);
        });
		$("#removeClass").click(function () {
        	$('#qnimate').removeClass('popup-box-on');
		});
	}
	function getchat(id_usuario){
		
		var dat = {
			"funcion" 		: "getchats",
			"id_usuario" 	: id_usuario
		}
		var jsonC = JSON.stringify(dat);
		$.ajax({
			url : "php/chatAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var template = "";
				$("#cuerpochat").html("");
				$.each(res, function(key,value){
					if(value['envio'] == 1){
						template += '<div class="chat-box-single-line">'+
                        			'<abbr class="timestamp">'+value['fecha']+'</abbr>'+
                    			'</div>'+
                    			'<div class="direct-chat-msg doted-border ">'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-name pull-left">'+value['nom_user']+'</span>'+
                        			'</div>'+
                        			'<img alt="message user image" src="images/team/team-2.jpg" class="direct-chat-img">'+
                        			'<div class="direct-chat-text">'+
                            			value['mensaje']+
                        			'</div>'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-timestamp pull-right">'+value['hora']+'</span>'+
                        			'</div>'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-img-reply-small pull-right"></span>'+
                        			'</div>'+
                    			'</div>';
                   	}
                   	if(value['envio'] == 0){
                   		template += '<div class="chat-box-single-line">'+
                        			'<abbr class="timestamp">'+value['fecha']+'</abbr>'+
                    			'</div>'+
                    			'<div class="direct-chat-msg doted-border ">'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-name pull-right">'+"Administrador"+'</span>'+
                        			'</div>'+
                        			'<img alt="message user image" src="images/team/team-2.jpg" class="direct-chat-img">'+
                        			'<div class="direct-chat-text">'+
                            			value['mensaje']+
                        			'</div>'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-timestamp pull-right">'+value['hora']+'</span>'+
                        			'</div>'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-img-reply-small pull-right"></span>'+
                        			'</div>'+
                    			'</div>';
                   	}
				});
				$("#cuerpochat").html(template);
				//$("#cuerpomensajes").animate({ scrollTop: $('#cuerpomensajes')[0].scrollHeight}, 1000);
			},
			error : function(res){
				console.log(res);
			}
		});
	}
	$("#enviarmensaje").click(function(e){
		var mensaje = $("#status_message").val();
		id_usuario = $("#id_usuario").html();
		
		
		var dat = {
			"mensaje" 		: mensaje,
			"funcion" 		: "setmensaje",
			"id_usuario" 	: id_usuario
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/chatAdmin.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				getchat(id_usuario);
				console.log("hecho");
			},
			error : function(res){
				console.log(res);
			}
		});
	});
	
	setInterval(getUsers,1000);
	
});
