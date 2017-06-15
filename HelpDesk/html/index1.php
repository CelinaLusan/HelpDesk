<!DOCTYPE html>
<html lang="es">
<head>
	<title>HelpDesk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6">
				<img src="../img/nova.jpeg" class="img-responsive" alt="Imagen responsive">
			</div>
			<div class="col-md-10 col-sm-8 col-xs-6">
				<h1>NovaDesk</h1>
			</div>
		</div>
		<br>
		<div class="row" id="todo">
			<div class="col-sm-3">
			    <div class="sidebar-nav">
				    <div class="navbar navbar-default" role="navigation">
				        <div class="navbar-header">
				       		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
				            	<span class="sr-only">Toggle navigation</span>
				            	<span class="icon-bar"></span>
				            	<span class="icon-bar"></span>
				            	<span class="icon-bar"></span>
				          	</button>
				          	<span class="visible-xs navbar-brand"></span>
				        </div>
				        <div class="navbar-collapse collapse sidebar-navbar-collapse">
				          	<ul class="nav navbar-nav">
				            	<li><a href="#" id="directorio">Directorio</a></li>
                        		<li><a href="#" id="cuentas">Cuentas de Usuario</a></li>
                        		<li><a href="#" id="plataformas">Plataformas Virtuales</a></li>
		                        <li><a href="#" id="solieq">Solicitud de Equipo</a></li>
		                        <li><a href="#" id="repdaños">Reportes de Daños</a></li>
		                        <li><a href="#" id="instsoft">Instalación de Software</a></li>
		                        <li><a href="#" id="solsoft">Solicitud de Software</a></li>
		                        <li><a href="#" id="red">Restricciones de Red</a></li>
		                        <li><a href="#" id="equipext">Equipos Externos</a></li>
				          	</ul>
				        </div><!--/.nav-collapse -->
				    </div>
		    	</div>
			</div>
			<div class="col-sm-9" id="cuerpo">
            </div>
		</div>

	<!--
	col-xs- = muy pequeños
	col-xs-offset-4
	col-sm- = pequeños
	col-md- = medianos
	col-lg-  grandes
	-->
	</div>
	<script type="text/template" id="tdirectorio">
        <div class="row">
        	<div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2" >
        		L. C. E. Pablo Manuel Acevedo Luria <br>
				Secretario Particular del Rector <br>
				pacevedo@jacinto.novauniversitas.edu.mx<br> 
				Tel.: (951) 501 72 00, 501 72 07, 501 72 08, Ext. 1031
        	</div>
        </div>
        <div class="row">
        <br>
        	<div class="col-md-6">
        		M.E.C. Josué Neftalí García Matías <br>
				Vice-Rector Académico <br>
				vice_acad@jacinto.novauniversitas.edu.mx
        	</div>
        	<div class="col-md-6">
        		L.C.E. Adaelvi Moya Solano <br>
				Vice-Rector Administrativo <br>
				vice_admin@jacinto.novauniversitas.edu.mx <br>
        	</div>
                    <!--<div class="col s4">
                        <a href="#" class="blue-text">Jefes de carrera</a>
                    </div>
                    <div class="col s4">
                        <a href="#" class="blue-text">Personal Administrativo</a>
                    </div>-->
                <!--</div>
            </div>-->
        </div>
    </script>
    
    <script type="text/template" id="tcuentas">
        <div class="row">
            <form role="form">
				<h2>Solicitar Cuenta de Usuario</h2>
	            <div class="col-md-6">
        	            <div class="form-group">
            	            <label for="nom">Nombre Completo</label>
                	        <input type="text" class="form-control" name="nom" id="nom"/>
                    	</div>
	                    <div class="form-group">
    	                    <label for="cargo">Cargo</label>
        	                <input type="text" class="form-control" name="cargo" id="cargo"/>
            	        </div>
                	    <div class="form-group">
                    	    <label for="nusuario">Nombre de Usuario</label>
                        	<input type="text"  class="form-control" name="nusuario" id="nusuario"/>
	                    </div>
    		    </div>
            	<div class="col-md-6">
                	<div class="form-group">
                    	<label for="razon">Razon</label>
	                    <textarea id="razon"  class="form-control" cols="6" rows="6"></textarea>
    	            </div>
        	        <br>
    	            <div class="submit">
        	            <button class="btn btn-default blue">Enviar</button>
            	    </div>
 	           </div>
 	       	</form>
        </div>
    </script>
            

	<script type="text/template" id="tsolieq">
      	<div class="row">
            <form role="form">
            	<h2>Solicitud de equipo</h2>
                <div class="col-md-6">
                    <div class="form-group">	
                        <label for="nombre">Nombre del equipo</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">	
                    </div>
                    <div  class="form-control">	
                        <label for="periodo">Periodo de uso</label>
                        <input type="text" class="form-control" name="periodo" id="periodo">	
                    </div>
                    <div class="form-control">	
                        <label for="solicitante">Solicitante</label>
                        <input type="text" class="form-control" name="solicitante" id="solicitante">	
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control">
                        <label for="razon">Razon</label>
                        <textarea id="razon" class="form-control" cols="6" rows="6"></textarea>
                    </div>
                    <br>
                    <div class="form-group">	
                        <label for="lugar">Lugar donde se ocupará el equipo</label>
                        <input type="text" class="form-control" name="lugar" id="lugar">	
                    </div>
                    <div class="submit">
                        <button class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </script>
        
	




	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/underscore-min.js"></script>
    <script type="text/javascript" src="../js/backbone-min.js"></script>
    <script type="text/javascript" src="../js/principal.js"></script>
</body>
</html>