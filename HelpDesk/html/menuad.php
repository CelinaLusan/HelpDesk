<?php
    session_start();
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

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap-select.js"></script>
        
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
                                <h5>Usuario</h5>
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
        <div class="mainbody-section text-center">
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
                            <a href="#plataformas-modal" data-toggle="modal">
                                <i class="fa fa-globe"></i>
                                <p>Plataformas Virtuales</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#solicitudEquipo-modal" data-toggle="modal">
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
                                    <a href="#reporteDanios-modal" data-toggle="modal">
                                        <i class="fa fa-bug"></i>
                                        <p>Reportes de Daños</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="#instalacionSoftware-modal" data-toggle="modal">
                                        <i class="fa fa-cogs"></i>
                                        <p>Instalación de Software</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#solicitudSoftware-modal" data-toggle="modal">
                                <i class="fa fa-pencil-square-o"></i>
                                <p>Solicitud de Software</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#restricciones-modal" data-toggle="modal">
                                <i class="fa fa-unlock"></i>
                                <p>Restricciones de Red</p>
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
                <div class="popup-head-left pull-left"><img src="images/team/team-1.jpg" alt="iamgurdeeposahan"> Gurdeep Osahan</div>
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
            <div class="popup-messages">
                <div class="direct-chat-messages">
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">October 8th, 2015</abbr>
                    </div>
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Osahan</span>
                        </div>
                        <!-- /.direct-chat-info -->
                        <img alt="message user image" src="images/team/team-2.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-img-reply-small pull-left"></span>
                            <span class="direct-chat-reply-name">Singh</span>
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">October 9th, 2015</abbr>
                    </div>
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Osahan</span>
                        </div>
                        <!-- /.direct-chat-info -->
                        <img alt="iamgurdeeposahan" src="images/team/team-3.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                        </div>
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                        </div>
                        <div class="direct-chat-info clearfix">
                            <img alt="iamgurdeeposahan" src="images/team/team-2.jpg" class="direct-chat-img big-round">
                            <span class="direct-chat-reply-name">Singh</span>
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                </div>
            </div>
            <div class="popup-messages-footer">
                <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
                <div class="btn-footer">
                    <button class="bg_none pull-right"><i class="glyphicon glyphicon-send"></i> </button>
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
                                            <form>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option selected disabled>Tipo de cargo</option>
                                                            <option>Alumno</option>
                                                            <option>Profesor</option>
                                                            <option>Asistente</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nombre" class="sr-only">Nombre</label>
                                                        <input type="text" id="cuentas_nombre" class="form-control" placeholder="Nombre Completo" required autofocus />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Nombre de Usuario</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Nombre de Usuario" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                         <label for="nom" class="sr-only">Razón</label>
                                                        <textarea class="form-control" id="cuentas_razon" placeholder="Razón por la cual desea tener una cuenta"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Nota: </b>La contraseña de la nueva cuenta será igual a el nombre de usuario, usted podrá cambiarla posteriormente.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-success btn-lg">Enviar</button> 
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
                                            <form>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="cuentas_nomusuario" class="sr-only">Nombre de Usuario</label>
                                                        <input type="text" id="cuentas_nomusuario" class="form-control" placeholder="Nombre de Usuario" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-justify"><b>Nota: </b>La contraseña de su cuenta será igual a el nombre de usuario, usted podrá cambiarla posteriormente.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-success btn-lg">Enviar</button> 
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
                        <form>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group col-md-4">
                                    <label>Deteccion de falla en: </label>
                                    <select class="form-control">
                                        <option>Aula Virtual</option>
                                        <option>Kabl</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Aula</label>
                                    <select class="form-control">
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
                                    <input type="text" class="form-control" placeholder="Numero de ip" required autofocus />
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Hora de la falla</label>
                                    <input type="text" class="form-control" placeholder="Hora" required autofocus />
                                </div>
                                <div class="form-group col-md-8">
                                    <label >Descripcion</label>
                                    <textarea class="form-control" placeholder="Descripcion de la falla">
                                    </textarea>
                                </div>
                                    
                                <div class="form-group col-md-offset-5">
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
                        <div class="form-group col-md-4">
                            <label>Nombre del equipo</label>
                            <input type="text" class="form-control" placeholder="Nombre del equipo" required autofocus />
                        </div>
                        <div class="form-group col-md-4">
                            <label >Periodo de uso</label>
                            <input type="text" class="form-control" placeholder="Tiempo de uso" required autofocus />
                        </div>
                        <div class="form-group col-md-4">
                            <label >Lugar</label>
                            <input type="text" class="form-control" placeholder="Lugar donde se le dara uso" required autofocus />
                        </div>
                        <div class="form-group col-md-6">
                            <label >Descripcion</label>
                            <textarea class="form-control" placeholder="Razon por la cual hace la solicitud">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-5">
                            <button class="btn btn-success btn-lg">Enviar</button> 
                        </div>
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
                            <div class="form-group col-md-4">
                                    <label>Aula</label>
                                    <select class="form-control">
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
                                    <input type="text" class="form-control" placeholder="Numero de ip" required autofocus />
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Hora de la falla</label>
                                    <input type="text" class="form-control" placeholder="Hora" required autofocus />
                                </div>
                        <div class="form-group col-md-6">
                            <label >Descripcion</label>
                            <textarea class="form-control" placeholder="Razon por la cual hace el reporte">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-5">
                            <button class="btn btn-success btn-lg">Enviar</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End reporte de danios Section -->
        
        
        
         
        <!-- Start instalacion de sw Section -->
        <div class="section-modal modal fade" id="instalacionSoftware-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h3>Instalación de software</h3>
                        </div>
                    </div>
                    <div class="row">
                           <div class="form-group col-md-4">
                                    <label>Aula</label>
                                    <select class="form-control">
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
                                    <input type="text" class="form-control" placeholder="Numero de ip" required autofocus />
                                </div>
                               
                        <div class="form-group col-md-4">
                            <label >Software a instalar</label>
                            <input type="text" class="form-control" placeholder="Que programa necesita" required autofocus />
                        </div>
                        <div class="form-group col-md-6">
                            <label >Descripcion</label>
                            <textarea class="form-control" placeholder="Razon por la cual necesita el sw">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-5">
                            <button class="btn btn-success btn-lg">Enviar</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End instalacion de sw Section -->
        
        
         
        <!-- Start solicitud de sw Section -->
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
                            <h3>Solicitud de software</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label >Software que necesita</label>
                            <input type="text" class="form-control" placeholder="Que programa necesita" required autofocus />
                        </div>
                        <div class="form-group col-md-6">
                            <label >Descripcion</label>
                            <textarea class="form-control" placeholder="Razon por la cual necesita el sw">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-5">
                            <button class="btn btn-success btn-lg">Enviar</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End solicitud de sw Section -->
        
        
        
         
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
                        <div class="form-group col-md-4">
                            <label>Aula</label>
                            <select class="form-control">
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
                            <input type="text" class="form-control" placeholder="cual es la direccion restringida" required autofocus />
                        </div>
                        <div class="form-group col-md-4">
                            <label >Hora</label>
                            <input type="text" class="form-control" placeholder="Hora a ocuparse" required autofocus />
                        </div>
                        <div class="form-group col-md-6">
                            <label >Descripcion</label>
                            <textarea class="form-control" placeholder="Razon por la cual quiere tener acceso a la direccion web">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-5">
                            <button class="btn btn-success btn-lg">Enviar</button> 
                        </div>
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
        </script>
    </body>
    
</html>