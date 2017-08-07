<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>NovaDesk</title>

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
        <link href="css/bootstrap-datepicker.css" rel="stylesheet">
		
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <!--<script src="js/contact_me.js"></script>
        --><script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-datepicker.es.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        
        <link rel="stylesheet/less" type="text/css" href="css/timepicker.less" />
        <script src="js/less.js" type="text/javascript"></script>

        <script src="js/chat.js" type="text/javascript"></script>
        <script src="js/datos-in.js" type="text/javascript"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #logo{
                width: 35%;
                height: 35%;
            }
            h5{
                color: white;
            }
            #usericon{
                color: white;
            }
            #ocultarbtnchat{
                color: black;
            }
        </style>
    </head>
    
    <body>
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img id="logo" src="images/logo-novadesk.png" alt="NovaUniversitas" class="center-block img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <div class="logo text-center">
                            <h1>NovaDesk</h1>
                            <!--<span>Help Desk</span>-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <ul class="navbar-form">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle form-control" data-toggle="dropdown">
                                    <?php echo $_SESSION['usuario']; ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#cambiarPassword-modal" data-toggle="modal">Change password</a></li>
                                    <li><a href="php/salir.php">Exit</a></li>
                                </ul>
                            </li> 

                        </ul>

                        <!-- Start cambiar password Section -->
        <div class="section-modal modal fade" id="cambiarPassword-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Change password</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/cambiarPassword.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                            <div class="form-group col-md-4">
                                <label >Current password</label>
                                <input type="password" class="form-control" placeholder="Current password" required autofocus name="contraseñaActual" id="contraseñaActual" />
                                <span class="errorContraseñaActual" style="color: red;display: none;">
                                    Error int he password.
                                </span>
                            </div>
                            <div class="form-group col-md-4">
                                <label >Password:</label>
                                <input type="password" class="form-control" placeholder="Password" required autofocus name="contraseña" id="contraseña" />
                            </div>
                            <div class="form-group col-md-4">
                                 <span class="errorContraseña2" style="color: red;display: none;">
                                    Passwords do not match.
                                </span>
                               
                                <label >Repeat password:</label>
                                <input type="password" class="form-control" placeholder="Repeat password" required autofocus name="contraseña2" id="contraseña2" />
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Submit"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End cambiar password Section -->
        
                        <!--
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only"><?php echo $_SESSION['usuario']; ?></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="php/salir.php">Cerrar sesion</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>-->

                            <!--<div class="logo text-center">
                                <i id="usericon" class="fa fa-user fa-2x"></i>
                                <a href="php/salir.php"><i class="fa fa-remove fa-2x"></i></a>
                                <h5>
                                    <?php echo $_SESSION['usuario']; ?>
                                </h5>
                                
                            </div>-->
                        </div>
                        <div class="row">
                            <form>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" onchange="cambioIdioma(this)">
                                            <option selected disabled>Seleccionar idioma</option>
                                            <option data-thumbnail="images/mexico.png">Spanish</option>
                                            <option data-thumbnail="images/estados-unidos.png" selected>English</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center" id="todo">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#cuentauser-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>User account</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#plataformas-modal" data-toggle="modal" id="plataformas-modalClick">
                                <i class="fa fa-globe"></i>
                                <p>Virtual platforms</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#solicitudEquipo-modal" data-toggle="modal" id="solicitudEquipo-modalClick">
                                <i class="fa fa-desktop"></i>
                                <p>Equipment request</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/Imagen1.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#reporteDanios-modal" data-toggle="modal" id="reporteDanios-modalClick">
                                        <i class="fa fa-bug"></i>
                                        <p>Damage report</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="menu-item green">
                                    <a href="#solicitudSoftware-modal" id="solicitudSoftware-modalClick" data-toggle="modal">
                                        <i class="fa fa-cogs"></i>
                                        <p>Request / installation of software</p>
                                    </a>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">                       
                        <div class="menu-item color">
                            <a href="#restricciones-modal" id="restricciones-modalClic" data-toggle="modal">
                                <i class="fa fa-unlock"></i>
                                <p>Network restrictions</p>
                            </a>
                        </div>

                        <div class="menu-item light-red">
                            <a href="#verReportes-modal" data-toggle="modal">
                                <i class="fa fa-pencil-square-o"></i>
                                <p>See my reports</p>
                            </a>
                        </div>
                        
                        
                        <div class="menu-item blue">
                            <a href="#" id="addClass">
                                <i class="fa fa-comments-o"></i>
                                <p>Chat</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        <div class="popup-box chat-popup" id="qnimate">
            <div class="popup-head">
                <div class="popup-head-left pull-left"><img src="images/team/team-1.jpg" alt="iamgurdeeposahan">Administrator</div>
                    <div class="popup-head-right pull-right">
                        <div class="btn-group">
                            <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                                <i class="glyphicon glyphicon-cog"></i>
                            </button>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="#">Eliminar Chat</a></li>
                            </ul>
                        </div>
                        <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button">
                            <i class="glyphicon glyphicon-minus" id="ocultarbtnchat"></i>
                        </button>
                </div>
            </div>
            <div class="popup-messages" id="cuerpomensajes">
                <div class="direct-chat-messages" id="cuerpochat">
                    <!--<div class="chat-box-single-line">
                        <abbr class="timestamp">October 8th, 2015</abbr>
                    </div>-->
                    <!-- Message. Default to the left -->
                    <!--<div class="direct-chat-msg doted-border">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Osahan</span>
                        </div>-->
                        <!-- /.direct-chat-info -->
                        <!--<img alt="message user image" src="images/team/team-2.jpg" class="direct-chat-img">--><!-- /.direct-chat-img -->
                        <!--<div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-img-reply-small pull-left"></span>
                            <span class="direct-chat-reply-name">Singh</span>
                        </div>-->
                        <!-- /.direct-chat-text -->
                    <!--</div>-->
                    <!-- /.direct-chat-msg -->
                    <!--<div class="chat-box-single-line">
                        <abbr class="timestamp">October 9th, 2015</abbr>
                    </div>-->
                    <!-- Message. Default to the left -->
                    <!--<div class="direct-chat-msg doted-border">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Osahan</span>
                        </div>-->
                        <!-- /.direct-chat-info -->
                        <!--<img alt="iamgurdeeposahan" src="images/team/team-3.jpg" class="direct-chat-img">--><!-- /.direct-chat-img -->
                        <!--<div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                        </div>
                        <div class="direct-chat-info clearfix">
                            <img alt="iamgurdeeposahan" src="images/team/team-2.jpg" class="direct-chat-img big-round">
                            <span class="direct-chat-reply-name">Singh</span>
                        </div>-->
                        <!-- /.direct-chat-text -->
                    <!--</div>-->
                    <!-- /.direct-chat-msg -->
                </div>
            </div>
            <div class="popup-messages-footer">
                <textarea id="status_message" placeholder="Escribe tu mensaje..." rows="10" cols="40" name="message"></textarea>
                <div class="btn-footer">
                    <button class="bg_none pull-right" id="enviarmensaje"><i class="glyphicon glyphicon-send"></i> </button>
                    <!-- <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                    <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
                    <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button> -->
                </div>
            </div>
        </div>
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Design & Developed by <a href="http://www.novauniversitas.edu.mx">NovaUniversitas</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start cuentas de usuario Section -->
        <div class="section-modal modal fade" id="cuentauser-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>User account for NU virtual platforms</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-user-plus"></i> Request user account</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarCuentaUsuario.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
					                                    <label>Account: </label>
					                                    <select class="form-control" name="cuenta">
					                                        <option>Aula Virtual</option>
					                                        <option>Kabl</option>
					                                    </select>
					                                </div>
                                                    <div class="form-group">
                                                        <select class="form-control" name="tipo" required>
                                                            <option selected disabled value="">Type of charge</option>
                                                            <option value="alumno">Student</option>
                                                            <option value="profesor">Teacher</option>
                                                            <option value="asistente">Assistant</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nombre" class="sr-only">Name</label>
                                                        <input type="text" id="cuentas_nombre" class="form-control" placeholder="Full name" required autofocus name="nombre" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Username</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Username" required name="usuario" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                         <label for="nom" class="sr-only">Reason</label>
                                                        <textarea class="form-control" id="cuentas_razon" placeholder="Reason why you want to have an account" name="razon"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Note: </b>The password of the new account will be the same as the username, and you can change it later.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success btn-lg" value="Submit"> 
                                                    </div>
                                                </div>
                                            </form>              
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-pencil"></i> Reset user account </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarRestablecerPassword.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Username</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Username" name="usuario" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Note: </b>The password of the new account will be the same as the username, and you can change it later.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success btn-lg" value="Submit">
                                                    </div>
                                                </div>
                                            </form>              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End cuentas de usuario Section -->
        
                
        
        <!-- Start plataforma virtual Section -->
        <div class="section-modal modal fade" id="plataformas-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Failure reporting on virtual platforms</h3>
                            <!--<p>Duis aute irure dolor in reprehenderit in voluptate</p>-->
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarFallaPlataforma.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group col-md-4">
                                    <label>Fault detection in: </label>
                                    <select class="form-control" name="falla">
                                        <option>Aula Virtual</option>
                                        <option>Kabl</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Classroom</label>
                                    <select class="form-control" name="aula">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Machine</label>
                                    <input type="text" class="form-control" placeholder="Ip number" required autofocus name="maquina" id="maquinaPV" />
                                    <span class="errorIP" style="color: red;display: none;">
                                        Error in the IP format.
                                    </span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Time of failure</label>
                                    <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                    <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                                </div>
                                <div class="form-group col-md-8">
                                    <label >Description</label>
                                    <textarea class="form-control" placeholder="Fault description" name="descripcion"></textarea>
                                </div>
                                    
                                <div class="form-group col-md-offset-5" id="btnPV">
                                        <button class="btn btn-success btn-lg">Submit</button> 
                                </div>
                            </div>
                        </form>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
        <!-- End plataformas virtuales Section -->
        
        
        <!-- Start solicitud de equipo Section -->
        <div class="section-modal modal fade" id="solicitudEquipo-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Equipment request</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarSolicitudEquipo.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                            <div class="form-group col-md-4">
                                <label>Name of the team:</label>
                                <input type="text" class="form-control" placeholder="Name of the team:" required autofocus name="nombreequipo" />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Start date</label>
                                <input type="text" class="datepicker1 form-control" placeholder="Start date" name="fechainicio" id="fechainicio" required autofocus />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Ending date</label>
                                <input type="text" class="datepicker2 form-control" placeholder="Ending date" name="fechafin" id="fechafin" required autofocus />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Place</label>
                                <input type="text" class="form-control" placeholder="Place" required autofocus name="lugar" />
                            </div>
                            <div class="form-group col-md-6">
                                <label >Description</label>
                                <textarea class="form-control" placeholder="Reason for making the request" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Submit"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End solicitud de equipo Section -->
        
      
        
         
        <!-- Start reporte de danios Section -->
        <div class="section-modal modal fade" id="reporteDanios-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Damage equipment</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarReportesDanios.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                            <div class="form-group col-md-4">
                                <label>Classroom</label>
                                <select class="form-control" name="aula">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label >Machine</label>
                                <input type="text" class="form-control" placeholder="Ip number" required autofocus name="maquina" id="maquinaRD" />
                                <span class="errorIP" style="color: red;display: none;">
                                    Error in the IP format.
                                </span>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Time of failure</label>
                                <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label >Description</label>
                                <textarea class="form-control" placeholder="Reazon for making the report" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5" id="btnRD">
                                <input type="submit" class="btn btn-success btn-lg" value="Submit"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End reporte de danios Section -->
        
        
        
         

        
         
        <!-- Start solicitud de sw Section -->
        <!-- Start instalacion de sw Section -->
        <div class="section-modal modal fade" id="solicitudSoftware-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Installation/ request of software</h3>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                                                <i class="fa fa-user-plus"></i> Installation of Software
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarInstalacionSoftware.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true" id="SI">
                                                <div class="form-group col-md-4">
                                                    <label>Classroom</label>
                                                    <select class="form-control" name="aula">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Machine</label>
                                                    <input type="text" class="form-control" placeholder="Ip number" required autofocus name="maquina" id="maquinaSI" />
                                                    <span class="errorIP" style="color: red;display: none;">
                                                        Error in the IP format.
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Software to install</label>
                                                    <input type="text" class="form-control" placeholder="What program you need?" required autofocus name="software" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >Description</label>
                                                    <textarea class="form-control" placeholder="Reason why you need the software" name="descripcion"></textarea>
                                                </div>
                                                <div class="form-group col-md-6 col-md-offset-5" id="btnSI">
                                                    <input type="submit" class="btn btn-success btn-lg" value="Submit"> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2">
                                                <i class="fa fa-pencil"></i>Request of software
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarSolicitudSoftware.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                                                <div class="form-group col-md-4">
                                                    <label >Software you need</label>
                                                    <input type="text" class="form-control" placeholder="What program you need?" required autofocus name="software" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >Description</label>
                                                    <textarea class="form-control" placeholder="Reason why you need the software?" name="descripcion"></textarea>
                                                </div>
                                                <div class="form-group col-md-6 col-md-offset-5">
                                                    <button class="btn btn-success btn-lg">Sumbit</button> 
                                                </div>
                                            </form>           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                
                    
                </div>
            </div>
        </div>
        <!-- End instalacion de sw Section -->
        

        <!-- Start  ver reportes Section -->
        <div class="section-modal modal fade" id="verReportes-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                   
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    My requests
                                </div>
                                <div class="panel-body">
                                
                                    
                                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 30%">Description</th>
                          <th style="width: 70%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <a>User account</a>
                            
                          </td>
                          <td>
                            
                            <a href="#cuenta-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="cuentaVerClic"><i class="fa fa-folder"></i> See </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="EliminarCuenta"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a>Virtual platforms</a>
                            
                          </td>
                          <td>
                            <a href="#plataformasVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="plataformasVirtualesVerClic"><i class="fa fa-folder"></i> See </a>
                         
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarPlataformasVirtuales"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>
                            <a>Equipment request </a>
                            
                          </td>
                          <td>
                            <a href="#solicitudEquipoVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudEquipoVerClic"><i class="fa fa-folder"></i> See </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarSolicitudEquipo"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                          <tr>
                          <td>4</td>
                          <td>
                            <a>Damage report</a>
                            
                          </td>
                          <td>
                            <a href="#reporteDaniosVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="reporteDaniosVerClic"><i class="fa fa-folder"></i> See </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarDaniosEquipo"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                          <tr>
                          <td>5</td>
                          <td>
                            <a>Installation of software</a>
                           
                          </td>
                          <td>
                            <a href="#instalacionSoftwareVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="instalacionSoftwareVerClic"><i class="fa fa-folder"></i> See </a>

                            <a href="#" class="btn btn-danger btn-xs" id="eliminarInstalacionSoftware"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                            <tr>
                          <td>6</td>
                          <td>
                            <a>Request of software</a>
                           
                          </td>
                          <td>
                            <a href="#solicitudSoftwareVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudSoftwareVerClic"><i class="fa fa-folder"></i> See </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarSolicitudSoftware"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                            <tr>
                          <td>7</td>
                          <td>
                            <a>Network restriction</a>
                          </td>
                          <td>
                            <a href="#restriccionesred-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="restriccionesredClic"><i class="fa fa-folder"></i> See </a>
                           
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarRestriccionRed"><i class="fa fa-trash-o"></i> Delete all</a>
                          </td>
                        </tr>
                          
                      </tbody>
                    </table>
                    <!-- end project list -->

                                    
                                    
                                </div>
                                <div class="panel-footer">
                                pie
                                </div>
                            <div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End ver reportes Section -->
        
        <!-- start Cuenta Section -->
        <div class="section-modal modal fade" id="cuenta-modal" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                	<div class="row">
                        <div class="section-title text-center">
                            <h3></h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseCuenta">User account</a>
                                        </h4>
                                    </div>
                                    <div id="collapseCuenta" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <table class="table">
						                      <thead>
						                        <tr>
						                          <th>#</th>
						                          <th>Account </th>
						                          <th>Name</th>
						                          <th>Username</th>
						                          <th>Reason</th>
						                          <th>Status</th>
						                          <th>Actions</th>
						                        </tr>
						                      </thead>
						                      <tbody id="tbodyCuenta">                          
						                      </tbody>
						                    </table>              
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsePassword">Reset user account</a>
                                        </h4>
                                    </div>
                                    <div id="collapsePassword" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table">
						                      <thead>
						                        <tr>
						                          <th>#</th>
						                          <th>User</th>
						                          <th>Status</th>
						                          <th>Actions</th>
						                        </tr>
						                      </thead>
						                      <tbody id="tbodyPassword">                          
						                      </tbody>
						                    </table>              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        
        <!-- start plataforma virtuales-modal Section -->
        <div class="section-modal modal fade" id="plataformasVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <h3 class="tituloTabla">Virtual platforms</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Failure</th>
                          <th>Classroom</th>
                          <th>Machine</th>
                          <th>Hour</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyPlataformasVirtuales">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>



        <!-- start solicitudEquipo-modal Section -->
   <!--     <div class="section-modal modal fade" id="solicitudEquipoVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <h3 class="tituloTabla">Solicitud Equipo</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Maquina</th>
                          <th>Hora</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody id="">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
       <!-- </div>
-->

        <!-- start solicitudEquipo-modal Section -->
        <div class="section-modal modal fade" id="solicitudEquipoVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <h3 class="tituloTabla">Equipment request</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name of the team</th>
                          <th>Start date</th>
                          <th>Ending date</th>
                          <th>Description</th>
                          <th>Place</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodySolicitudEquipo">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>
        

    

        <!-- start reporteDAnios-modal Section -->
        <div class="section-modal modal fade" id="reporteDaniosVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <h3 class="tituloTabla">Damage report</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Machine</th>
                          <th>Hour</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyReporteDanios">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>
        

		<!-- start instalacionSoftware-modal Section -->
        <div class="section-modal modal fade" id="instalacionSoftwareVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                	<h3 class="tituloTabla">Installation of software</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Machine</th>
                          <th>Software</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyInstalacionSoftware">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>
        


        <!-- start solicitudSoftware-modal Section -->
        <div class="section-modal modal fade" id="solicitudSoftwareVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                	<h3 class="tituloTabla">Request of software</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Software</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodySolicitudSoftware">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>
        

        <!-- start restriccionesred-modal Section -->
        <div class="section-modal modal fade" id="restriccionesred-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                	<h3 class="tituloTabla">Restricciones de red</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Address</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyRestricciones">                          
                      </tbody>
                    </table>
                    <!-- end project list -->
                   
                </div>
            </div>
        </div>
        
         
        <!-- Start srestricciones de red Section -->
        <div class="section-modal modal fade" id="restricciones-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Network restriction</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarRestricciones.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>&in=true">
                            <div class="form-group col-md-4">
                                <label>Classroom</label>
                                <select class="form-control" name="aula">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label >Web address</label>
                                <input type="text" class="form-control" placeholder="What is the restricted address" required autofocus name="direccion" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Hour</label>
                                <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                            </div>
                            <div class="form-group col-md-6">
                                <label >Description</label>
                                <textarea class="form-control" placeholder="Reason for which you want access to web address" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Submit">
                                <!--<button class="btn btn-success btn-lg submit">Enviar</button>--> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Restricciones de red -->
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contact With Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> your-email@mail.com</li>
                                    <li><strong>Phone :</strong> +8801-6778776</li>
                                    <li><strong>Mobile :</strong> +8801-45565378</li>
                                    <li><strong>Web :</strong> yourdomain.com</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                                    <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                                    <li><strong>Sat :</strong> 9 am to 3 pm</li>
                                    <li><strong>Sunday :</strong> Closed</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
        
        <script type="text/javascript">
            $(function(){	
                $("#addClass").click(function () {
                          $('#qnimate').addClass('popup-box-on');
                            });

                            $("#removeClass").click(function () {
                          $('#qnimate').removeClass('popup-box-on');
                            });
            });
            /*$.datepicker.regional['es'] = {
				closeText: 'Cerrar',
				prevText: '< Ant',
				nextText: 'Sig >',
				currentText: 'Hoy',
				monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				weekHeader: 'Sm',
				dateFormat: 'dd/mm/yy',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};*/
			//$.datepicker.setDefaults($.datepicker.regional['es']);
            $('#restricciones-modalClic').click(function(){
            	$('.timepickerS').timepicker();
            });
            $('#reporteDanios-modalClick').click(function(){
                $('.timepickerS').timepicker();
            });
            $('#plataformas-modalClick').click(function(){
                $('.timepickerS').timepicker();
            });
            $('#solicitudEquipo-modalClick').click(function(){
                $('.datepicker1').datepicker({
                	language: 'es',
                	format 	: 'dd/mm/yyyy'
                });
                $('.datepicker1').change(function(){
                	$('.datepicker2').datepicker({
	                	language:'es',
	                	format 	: 'dd/mm/yyyy',
	                	startDate:$('#fechainicio')[0].value
	                });
                });
            });
            $('#maquinaPV').focusout(function(){
                var a = $('#maquinaPV').val();
                var patronIp=new RegExp("^([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3})$");
                if(a.search(patronIp)==0){
                    valores=a.split(".");
                    if(valores[0]<=255 && valores[1]<=255 && valores[2]<=255 && valores[3]<=255){
                        $('#btnPV').html('<input type="submit" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[0].style.display = "none";
                    }
                    else{
                        $('.btnPV').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[0].style.display = "block";
                    }
                }
                else{
                    $('#btnPV').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                    $('.errorIP')[0].style.display = "block";
                }
            });
            $('#maquinaRD').focusout(function(){
                var a = $('#maquinaRD').val();
                var patronIp=new RegExp("^([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3})$");
                if(a.search(patronIp)==0){
                    valores=a.split(".");
                    if(valores[0]<=255 && valores[1]<=255 && valores[2]<=255 && valores[3]<=255){
                        $('#btnRD').html('<input type="submit" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[1].style.display = "none";
                    }
                    else{
                        $('.btnRD').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[1].style.display = "block";
                    }
                }
                else{
                    $('#btnRD').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                    $('.errorIP')[1].style.display = "block";
                }
            });
            $('#maquinaSI').focusout(function(){
                var a = $('#maquinaSI').val();
                var patronIp=new RegExp("^([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3})$");
                if(a.search(patronIp)==0){
                    valores=a.split(".");
                    if(valores[2]<=255 && valores[1]<=255 && valores[2]<=255 && valores[3]<=255){
                        $('#btnSI').html('<input type="submit" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[2].style.display = "none";
                    }
                    else{
                        $('#btnSI').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                        $('.errorIP')[2].style.display = "block";
                    }
                }
                else{
                    $('#btnSI').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                    $('.errorIP')[2].style.display = "block";
                }
            });
            $('#contraseñaActual').focusout(function(e){
                var dat = {
                    "funcion"               : "contraseñaActual",
                    "id_usuario"            : <?php echo $_SESSION['id_usuario'] ?>,
                    "password"              : $('#contraseñaActual')[0].value

                }
                var jsonC = JSON.stringify(dat);
                $.ajax({
                    url : "php/password.php",
                    type : "POST",
                    data : 'json=' + jsonC,
                    dataType: "json",
                    success : function(res){
                        if(res.length == 0){
                            $('#btnCP').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                            $('.errorContraseñaActual')[0].style.display = "block";
                        }
                        else{
                            $('#btnCP').html('<input type="submit" class="btn btn-success btn-lg" value="Enviar">');
                            $('.errorContraseñaActual')[0].style.display = "none";  
                        }
                    },
                    error : function(res){
                        console.log(res);
                    }
                });
            });

            $('#contraseña2').focusout(function(e){
                var password = $('#contraseña')[0].value;
                var password2 = $('#contraseña2')[0].value;
                console.log(password);
                console.log(password2);
                if(password != password2){
                    $('#btnCP').html('<input type="button" class="btn btn-success btn-lg" value="Enviar">');
                    $('.errorContraseña2')[0].style.display = "block";
                }
                else{
                    $('#btnCP').html('<input type="submit" class="btn btn-success btn-lg" value="Enviar">');
                    $('.errorContraseña2')[0].style.display = "none";  
                }
            });
        </script>
        
        <script src="js/jquery.toaster.js"></script>
        <script type="text/javascript">

            cambioIdioma = function(e){
                if(!(e.value === "English")){
                    window.location = "menuUser.php";
                }
            };
            poner = function(e){
                if(e === "cuenta"){
                    $.toaster({ priority : 'info', title : 'User Account', message : 'Added sucessfully!'});
                }
                
                if(e === "restablecer"){
                    $.toaster({ priority : 'info', title : 'Reset user Account', message : 'Added sucessfully!'});
                }

                if(e === "plataformas_virtuales"){
                    $.toaster({ priority : 'info', title : 'Virtual platforms', message : 'Added sucessfully!'});
                }

                if(e === "solicitud_equipo"){
                    $.toaster({ priority : 'info', title : 'Equipment request', message : 'Added sucessfully!'});
                }

                if(e === "danios_equipo"){
                    $.toaster({ priority : 'info', title : 'Damage report', message : 'Added sucessfully!'});
                }

                if(e === "solicitud_software"){
                    $.toaster({ priority : 'info', title : 'Request of software', message : 'Added sucessfully!'});
                }

                if(e === "instalacion_software"){
                    $.toaster({ priority : 'info', title : 'installation of software', message : 'Added sucessfully!'});
                }

                if(e === "restrinccion_red"){
                    $.toaster({ priority : 'info', title : 'Network restrictions', message : 'Added sucessfully!'});
                }

                if(e === "password"){
                    $.toaster({ priority : 'info', title : 'Contraseña', message : 'Se cambio correctamente!'});
                }
            }

            var url = window.location.search;
            if(url.length>0){
                url = url.substring(1);
                var i=0;
                while(url[i] != '='){
                    i++;
                }
                url = url.substring(0,i);
                var cad = window.location.search;
                cad = cad.substring(1);
                var check = cad.substring(i+1);
                if(check === "true"){
                    poner(url);
                }
            }
            
        </script>
    </body>
    
</html>