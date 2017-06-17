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
        <script src="js/datos.js" type="text/javascript"></script>
        
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
                            <div class="logo text-center">
                                <i id="usericon" class="fa fa-user fa-2x"></i>
                                <a href="php/salir.php"><i class="fa fa-remove fa-2x"></i></a>
                                <h5>
                                    <?php echo $_SESSION['usuario']; ?>
                                </h5>
                                
                            </div>
                        </div>
                        <div class="row">
                            <form>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control selectpicker">
                                            <option selected disabled>Seleccionar idioma</option>
                                            <option data-thumbnail="images/mexico.png" >Español</option>
                                            <option data-thumbnail="images/estados-unidos.png" >English</option>
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
                                <p>Cuentas de Usuario</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#plataformas-modal" data-toggle="modal" id="plataformas-modalClick">
                                <i class="fa fa-globe"></i>
                                <p>Plataformas Virtuales</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#solicitudEquipo-modal" data-toggle="modal" id="solicitudEquipo-modalClick">
                                <i class="fa fa-desktop"></i>
                                <p>Solicitud de Equipo</p>
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
                                        <p>Reportes de Daños</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="menu-item green">
                                    <a href="#solicitudSoftware-modal" id="solicitudSoftware-modalClick" data-toggle="modal">
                                        <i class="fa fa-cogs"></i>
                                        <p>Solicitud/ instalacion de software</p>
                                    </a>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">                       
                        <div class="menu-item color">
                            <a href="#restricciones-modal" id="restricciones-modalClic" data-toggle="modal">
                                <i class="fa fa-unlock"></i>
                                <p>Restricciones de Red</p>
                            </a>
                        </div>

                        <div class="menu-item light-red">
                            <a href="#verReportes-modal" data-toggle="modal">
                                <i class="fa fa-pencil-square-o"></i>
                                <p>Ver mis reportes</p>
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
                <div class="popup-head-left pull-left"><img src="images/team/team-1.jpg" alt="iamgurdeeposahan">Administrador</div>
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
                            <h3>Cuenta de usuario para plataforfas virtuales de NU</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-user-plus"></i> Solicitar Cuenta de Usuario</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarCuentaUsuario.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
					                                    <label>Cuenta: </label>
					                                    <select class="form-control" name="cuenta">
					                                        <option>Aula Virtual</option>
					                                        <option>Kabl</option>
					                                    </select>
					                                </div>
                                                    <div class="form-group">
                                                        <select class="form-control" name="tipo" required>
                                                            <option selected disabled value="">Tipo de cargo</option>
                                                            <option value="alumno">Alumno</option>
                                                            <option value="profesor">Profesor</option>
                                                            <option value="asistente">Asistente</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nombre" class="sr-only">Nombre</label>
                                                        <input type="text" id="cuentas_nombre" class="form-control" placeholder="Nombre Completo" required autofocus name="nombre" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Nombre de Usuario</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Nombre de Usuario" required name="usuario" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                         <label for="nom" class="sr-only">Razón</label>
                                                        <textarea class="form-control" id="cuentas_razon" placeholder="Razón por la cual desea tener una cuenta" name="razon"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Nota: </b>La contraseña de la nueva cuenta será igual a el nombre de usuario, usted podrá cambiarla posteriormente.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success btn-lg" value="Enviar"> 
                                                    </div>
                                                </div>
                                            </form>              
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-pencil"></i> Restablecer Cuenta de Usuario</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarRestablecerPassword.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Nombre de Usuario</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Nombre de Usuario" name="usuario" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Nota: </b>La contraseña de su cuenta será igual a el nombre de usuario, usted podrá cambiarla posteriormente.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success btn-lg" value="Enviar">
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
                            <h3>Reporte de fallas en plataformas virtuales</h3>
                            <!--<p>Duis aute irure dolor in reprehenderit in voluptate</p>-->
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarFallaPlataforma.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group col-md-4">
                                    <label>Deteccion de falla en: </label>
                                    <select class="form-control" name="falla">
                                        <option>Aula Virtual</option>
                                        <option>Kabl</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Aula</label>
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
                                    <label >Maquina</label>
                                    <input type="text" class="form-control" placeholder="Numero de ip" required autofocus name="maquina" id="maquinaPV" />
                                    <span class="errorIP" style="color: red;display: none;">
                                        Error en el formato de la IP.
                                    </span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Hora de la falla</label>
                                    <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                    <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                                </div>
                                <div class="form-group col-md-8">
                                    <label >Descripcion</label>
                                    <textarea class="form-control" placeholder="Descripcion de la falla" name="descripcion">
                                    </textarea>
                                </div>
                                    
                                <div class="form-group col-md-offset-5" id="btnPV">
                                        <button class="btn btn-success btn-lg">Enviar</button> 
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
                            <h3>Solicitud para equipos</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarSolicitudEquipo.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                            <div class="form-group col-md-4">
                                <label>Nombre del equipo</label>
                                <input type="text" class="form-control" placeholder="Nombre del equipo" required autofocus name="nombreequipo" />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Fecha de inicio</label>
                                <input type="text" class="datepicker1 form-control" placeholder="Fecha de inicio" name="fechainicio" id="fechainicio" required autofocus />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Fecha de fin</label>
                                <input type="text" class="datepicker2 form-control" placeholder="Fecha de fin" name="fechafin" id="fechafin" required autofocus />
                            </div>
                            <div class="form-group col-md-4">
                                <label >Lugar</label>
                                <input type="text" class="form-control" placeholder="Lugar donde se le dara uso" required autofocus name="lugar" />
                            </div>
                            <div class="form-group col-md-6">
                                <label >Descripcion</label>
                                <textarea class="form-control" placeholder="Razon por la cual hace la solicitud" name="descripcion">
                                </textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Enviar"> 
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
                            <h3>Reporte de daños</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarReportesDanios.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                            <div class="form-group col-md-4">
                                <label>Aula</label>
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
                                <label >Maquina</label>
                                <input type="text" class="form-control" placeholder="Numero de ip" required autofocus name="maquina" id="maquinaRD" />
                                <span class="errorIP" style="color: red;display: none;">
                                    Error en el formato de la IP.
                                </span>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Hora de la falla</label>
                                <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label >Descripcion</label>
                                <textarea class="form-control" placeholder="Razon por la cual hace el reporte" name="descripcion">
                                </textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5" id="btnRD">
                                <input type="submit" class="btn btn-success btn-lg" value="Enviar"> 
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
                            <h3>Instalación/ Solicitud de software</h3>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                                                <i class="fa fa-user-plus"></i> Instalacion de Software
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarInstalacionSoftware.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>" id="SI">
                                                <div class="form-group col-md-4">
                                                    <label>Aula</label>
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
                                                    <label >Maquina</label>
                                                    <input type="text" class="form-control" placeholder="Numero de ip" required autofocus name="maquina" id="maquinaSI" />
                                                    <span class="errorIP" style="color: red;display: none;">
                                                        Error en el formato de la IP.
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label >Software a instalar</label>
                                                    <input type="text" class="form-control" placeholder="Que programa necesita" required autofocus name="software" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >Descripcion</label>
                                                    <textarea class="form-control" placeholder="Razon por la cual necesita el sw" name="descripcion">
                                                    </textarea>
                                                </div>
                                                <div class="form-group col-md-6 col-md-offset-5" id="btnSI">
                                                    <input type="submit" class="btn btn-success btn-lg" value="Enviar"> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2">
                                                <i class="fa fa-pencil"></i>Solicitud de software
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form method="POST" action="php/agregarSolicitudSoftware.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                                                <div class="form-group col-md-4">
                                                    <label >Software que necesita</label>
                                                    <input type="text" class="form-control" placeholder="Que programa necesita" required autofocus name="software" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >Descripcion</label>
                                                    <textarea class="form-control" placeholder="Razon por la cual necesita el sw" name="descripcion">
                                                    </textarea>
                                                </div>
                                                <div class="form-group col-md-6 col-md-offset-5">
                                                    <button class="btn btn-success btn-lg">Enviar</button> 
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
                                    Mis solicitudes
                                </div>
                                <div class="panel-body">
                                
                                    
                                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 30%">Descripción</th>
                          <th style="width: 70%">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <a>Cuentas de Usuario</a>
                            
                          </td>
                          <td>
                            
                            <a href="#cuenta-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="cuentaVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="EliminarCuenta"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a>Plataformas Virtuales</a>
                            
                          </td>
                          <td>
                            <a href="#plataformasVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="plataformasVirtualesVerClic"><i class="fa fa-folder"></i> Ver </a>
                         
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarPlataformasVirtuales"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>
                            <a>Solicitud de Equipo</a>
                            
                          </td>
                          <td>
                            <a href="#solicitudEquipoVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudEquipoVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarSolicitudEquipo"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>4</td>
                          <td>
                            <a>Reporte de daños</a>
                            
                          </td>
                          <td>
                            <a href="#reporteDaniosVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="reporteDaniosVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarDaniosEquipo"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>5</td>
                          <td>
                            <a>Instalación de software</a>
                           
                          </td>
                          <td>
                            <a href="#instalacionSoftwareVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="instalacionSoftwareVerClic"><i class="fa fa-folder"></i> Ver </a>

                            <a href="#" class="btn btn-danger btn-xs" id="eliminarInstalacionSoftware"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                            <tr>
                          <td>6</td>
                          <td>
                            <a>Solicitud de software</a>
                           
                          </td>
                          <td>
                            <a href="#solicitudSoftwareVer-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudSoftwareVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarSolicitudSoftware"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                            <tr>
                          <td>7</td>
                          <td>
                            <a>Restricciones de Red</a>
                          </td>
                          <td>
                            <a href="#restriccionesred-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="restriccionesredClic"><i class="fa fa-folder"></i> Ver </a>
                           
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarRestriccionRed"><i class="fa fa-trash-o"></i> Eliminar todo</a>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseCuenta">Cuenta de Usuario</a>
                                        </h4>
                                    </div>
                                    <div id="collapseCuenta" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <table class="table">
						                      <thead>
						                        <tr>
						                          <th>#</th>
						                          <th>Nombre de equipo</th>
						                          <th>Fecha de inicio</th>
						                          <th>Fecha de fin</th>
						                          <th>Descripcion</th>
						                          <th>Lugar</th>
						                          <th>Estado</th>
						                          <th>Acciones</th>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsePassword">Restablecer Cuenta de Usuario</a>
                                        </h4>
                                    </div>
                                    <div id="collapsePassword" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table">
						                      <thead>
						                        <tr>
						                          <th>#</th>
						                          <th>Usuario</th>
						                          <th>Estado</th>
						                          <th>Acciones</th>
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
        
        <!-- start reporteDAnios-modal Section -->
        <div class="section-modal modal fade" id="plataformasVer-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <h3 class="tituloTabla">Plataformas Virtuales</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Falla</th>
                          <th>Aula</th>
                          <th>Maquina</th>
                          <th>Hora</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
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
                    <h3 class="tituloTabla">Solicitud de equipo</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre de equipo</th>
                          <th>Fecha de inicio</th>
                          <th>Fecha de fin</th>
                          <th>Descripcion</th>
                          <th>Lugar</th>
                          <th>Estado</th>
                          <th>Acciones</th>
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
                    <h3 class="tituloTabla">Reporte de daños</h3>
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
                	<h3 class="tituloTabla">Instalacion de software</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Maquina</th>
                          <th>Software</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
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
                	<h3 class="tituloTabla">Solicitud de software</h3>
                    <!--inicio-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Software</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
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
                          <th>Dirección</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
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
                            <h3>Restricciones de red</h3>
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="php/agregarRestricciones.php?id_usuario=<?php echo $_SESSION['id_usuario'];?>">
                            <div class="form-group col-md-4">
                                <label>Aula</label>
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
                                <label >Direccion web</label>
                                <input type="text" class="form-control" placeholder="cual es la direccion restringida" required autofocus name="direccion" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Hora</label>
                                <label for="HRR"><i class="fa fa-clock-o"></i></label>
                                <input class="timepickerS form-control" type="text" required name="hora" id="HRR" />
                            </div>
                            <div class="form-group col-md-6">
                                <label >Descripcion</label>
                                <textarea class="form-control" placeholder="Razon por la cual quiere tener acceso a la direccion web" name="descripcion">
                                </textarea>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Enviar">
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
        </script>              
    </body>
    
</html>