<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        if($_SESSION['tipo'] == 1){
            header("location: menuad.php");
        }
        else{
            header("location: menuUser.php");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/chat.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/bootstrap-select.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="cyan">
		<div id="todo"></div>
		<script type="text/template" id="loginEs">
			<div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-8 col-sm-5 col-sm-offset-6">
                        <div class="form-group green">
                            <select class="form-control">
                                <option selected disabled>Seleccionar idioma</option>
                                <option data-thumbnail="images/mexico.png" id="espaniol">Español</option>
                                <option data-thumbnail="images/estados-unidos.png" id="ingles">Ingles</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mainbody-section text-center">
                    <div class="col-md-3">        
                        <div class="menu-item green">
                            <a href="www.academicos.novauniversitas.edu.mx" data-toggle="modal">
                                <i class="fa fa-desktop"></i>
                                <p>Aula Virtual</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="huamuchil.novauniversitas.edu.mx/kabl" data-toggle="modal">
                                <i class="fa fa-desktop"></i>
                                <p>Kabl</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <h1 id="title">N o v a D e s k</h1>
                        <br>
                        <div class="card card-container col-md-8 col-md-offset-2">
                            <p id="profile-name" class="profile-name-card"></p>
                            <form class="form-signin" method="GET" action="php/login.php">
                                <div class="form-group">
                                    <span id="error"><p>Error en el usuario o contraseña </p></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="usuario" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
                                </div>
                                <div class="form-group">
                                <input type="password" id="password" class="form-control" placeholder="contraseña" name="password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-block btn-signin" type="submit" id="submit">Entrar</button>
                                </div>
                            </form><!-- /form -->

                            <a href="#" class="form-group">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>        
                        
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item color">
                            <p>
                            	NovaDesk nos permite explorar y agilizar los procesos de NovaUniversitas, implementando alta tecnologia, para tener un rendimiento optimo entre alumno, profesores y personal tecnico.
                            </p>
                        </div>
                        
                        <div class="menu-item blue">
							<p>
								NovaUniversitas en una universidad perteneciente al SUNEO, y esta formada por una serie de campus ubicados en comunidades aisladas o de dimenciones limitadas, pero cuenta con instalaciones, personal y equipo adecuado para ofrecer educacion de calidad.
							</p>
                        </div>
                        
                    </div>
                </div>
                <!--
		        <div class="card card-container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		            <img id="profile-img" class="center profile-img-card" src="img/avatar_2x.png" />
		            <p id="profile-name" class="profile-name-card"></p>
		            <form class="form-signin" method="GET" action="php/login.php">
		                <span id="error"></span>
		                <input type="text" id="usuario" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
		                <input type="password" id="password" class="form-control" placeholder="contraseña" name="password" required>
		                <div id="remember" class="checkbox">
		                    <label>
		                        <input type="checkbox" value="remember-me"> Recuerdame
		                    </label>
		                </div>
		                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="submit">Entrar</button>
		            </form><!-- /form -->
		        <!--    <a href="#" class="forgot-password">
		                ¿Olvidaste tu contraseña?
		            </a>
		        </div><!-- /card-container -->
		    <!--</div>--><!-- /container -->
		</script>

        <script type="text/template" id="loginIn">
        	<div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-8 col-sm-5 col-sm-offset-6">
                        <div class="form-group green">
                            <select class="form-control">
                                <option selected disabled>Select language</option>
                                <option data-thumbnail="images/mexico.png" id="espaniol">Spanish</option>
                                <option data-thumbnail="images/estados-unidos.png" id="ingles">English</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mainbody-section text-center">
                    <div class="col-md-3">        
                        <div class="menu-item green">
                            <a href="www.academicos.novauniversitas.edu.mx" data-toggle="modal">
                                <i class="fa fa-desktop"></i>
                                <p>Aula Virtual</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="huamuchil.novauniversitas.edu.mx/kabl" data-toggle="modal">
                                <i class="fa fa-desktop"></i>
                                <p>Kabl</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <h1 id="title">N o v a D e s k</h1>
                        <br>
                        <div class="card card-container col-md-8 col-md-offset-2">
                            <p id="profile-name" class="profile-name-card"></p>
                            <form class="form-signin" method="GET" action="php/login.php">
                                <div class="form-group">
                                    <span id="error"><p>Error in the username or password </p></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="usuario" class="form-control" placeholder="User" name="usuario" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-block btn-signin" type="submit" id="submit">Log in</button>
                                </div>
                            </form><!-- /form -->

                            <a href="#" class="form-group">
                                Forgot password?
                            </a>
                        </div>        
                        
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item color">
                            <p>
                            	NovaDesk allows us to explore and to expedite the processes of NovaUniversitas, implementing hi-tech, to have a optimal     performance between students, teachers and technical personnel.
                            </p>
                        </div>
                        
                        <div class="menu-item blue">
							<p>
								NovaUniversitas in a University belonging to the SUNEO, and is formed by a series of campus located in isolated communities or of limited dimensions, but has facilities, staff and appropriate equipment to provide quality education.

							</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </script>
        
        <script type="text/javascript" src="js/jquery.js"></script>
   <!--     <script type="text/javascript" src="js/underscore.js"></script>
        <script type="text/javascript" src="js/backbone.js"></script>
-->
        <script type="text/javascript" src="js/underscore-min.js"></script>
        <script type="text/javascript" src="js/backbone-min.js"></script>
        
        <script type="text/javascript" src="js/principalLogin.js"></script>
        <?php 
        	echo '<script type="text/javascript">';
        	echo '$(function(){';
        	if(isset($_GET['error'])){
        		$error = $_GET['error'];
        		if($error == "true"){
        			echo '$("#error")[0].style.display = "block";';
        		}
        		else{
					echo '$("#error")[0].style.display = "none";';
        		}
        	}
        	else{
                echo '$("#error")[0].style.display = "none";';
        	}
        	echo '});';
        	echo '</script>';
        ?>
    </body>
</html>
