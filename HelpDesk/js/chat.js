$(function(){
	function getchat(){
		var dat = {
			"funcion" : "getchats"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/chat.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				console.log(res);
				var template = "";
				$("#cuerpochat").html("");
				$.each(res, function(key,value){
					if(value['envio'] == 1){
						template += '<div class="chat-box-single-line">'+
                        			'<abbr class="timestamp">'+value['fecha']+'</abbr>'+
                    			'</div>'+
                    			'<div class="direct-chat-msg doted-border ">'+
                        			'<div class="direct-chat-info clearfix">'+
                            			'<span class="direct-chat-name pull-right">'+value['nom_user']+'</span>'+
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
                            			'<span class="direct-chat-name pull-left">'+"Administrador"+'</span>'+
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
		console.log(mensaje);
		var dat = {
			"mensaje" : mensaje,
			"funcion" : "setmensaje"
		}
		var jsonC = JSON.stringify(dat);
		console.log(jsonC);
		$.ajax({
			url : "php/chat.php",
			type : "POST",
			data : 'json=' + jsonC,
			dataType: "json",
			success : function(res){
				var Getcha = new getchat();
				console.log("hecho");
			},
			error : function(res){
				console.log(res);
			}
		});
	});
	var Getchat = new getchat();
//	setInterval(getchat,1000);
});
