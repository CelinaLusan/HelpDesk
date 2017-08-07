<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NovaDesk </title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
        
    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                  <img src="images/logo-novadesk.png" class="img-responsive col-md-6" style="width:80px;" >
                  <br>
                  <span class="col-md-6">NovaDesk</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>Administrador</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Personas  </h3>
                <ul class="nav side-menu" id="listaUsers">
                  
                  <!--<li><a href="#" id="addClass"><i class="fa fa-user green"></i> Usuario x <span class="fa fa-comments"></span></a>
                  </li>
                  <li><a><i class="fa fa-user green"></i> Usuario xx <span class="fa fa-comments"></span></a>
                   
                  </li>
                  <li><a><i class="fa fa-user"></i> Usuario xxx <span class="fa fa-comments"></span></a>
                  </li>
                  -->
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Administrador
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    </li>
                    <li><a href="#"><i class="fa fa-question-circle pull-right"></i>Ayuda</a></li>
                    <li><a href="php/salir.php"><i class="fa fa-sign-out pull-right"></i>Salir</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="  dropdown" aria-expanded="false">
                    <i class="fa fa-eye"></i>
                  </a>
                   <ul class="dropdown-menu dropdown-usermenu pull-right">
                    </li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Inglés</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!--<div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar..." id="buscarInput" onKeyUp="buscarTodo(this)">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="table-responsive">
                <table class="table-striped table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Usuario</th>
                      <th>Pertenece a</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody id="tbodyBuscardor">
                  </tbody>
                </table>
              </div>
            </div>
            -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menú</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Elije una de las opciones para poder desplegar las solicitudes o reportes relacionadas con este.</p>

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
	                          <a href="#cuentasUsuario-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="cuentasUsuarioVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                              <a href="#" class="btn btn-danger btn-xs" id="EliminarCuenta"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a>Plataformas Virtuales</a>
                            
                          </td>
                          <td>
	                          <a href="#plataformasVirtuales-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="plataformasVirtualesVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarPlataformasVirtuales"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>
                            <a>Solicitud de Equipo</a>
                            
                          </td>
                          <td>
                            <a href="#solicitudEquipo-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudEquipoVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarSolicitudEquipo"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>4</td>
                          <td>
                            <a>Reporte de daños</a>
                            
                          </td>
                          <td>
                            <a href="#reporteDanios-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="reporteDaniosVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarDaniosEquipo"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>5</td>
                          <td>
                            <a>Instalación de software</a>
                           
                          </td>
                          <td>
                            <a href="#instalacionSoftware-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="instalacionSoftwareVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs" id="eliminarInstalacionSoftware"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                            <tr>
                          <td>6</td>
                          <td>
                            <a>Solicitud de software</a>
                           
                          </td>
                          <td>
                            <a href="#solicitudSoftware-modal" class="btn btn-primary btn-xs" data-toggle="modal" id="solicitudSoftwareVerClic"><i class="fa fa-folder"></i> Ver </a>
                            
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

                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Gestion de usuarios</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <p>Administre las cuentas de usuario del HelpDesk</p>

                      <!-- start project list -->
                      <table class="table table-striped projects">
                        <thead>
                          <tr>
                            <th>Opción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="#adduser-modal" class="btn" data-toggle="modal" id="adduserbtn">Agregar Usuario</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#moduser-modal" class="btn" data-toggle="modal" id="moduserbtn">Modificar Usuario</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#deluser-modal" class="btn" data-toggle="modal" id="deluserbtn">Eliminar Usuario</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- end project list -->

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<div class="modal fade" id="adduser-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Agregar Usuario para HelpDesk</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form method="POST" action="php/agregarUsuario.php">
                    <div class="form-group">
                      <label for="nombreuser" class="sr-only">Nombre de Usuario</label>
                      <input type="text" id="nombreuser" class="form-control" placeholder="Nombre de Usuario" required autofocus name="nombreu" />
                    </div>
                    <div class="form-group">
                      <label for="contrasenia" class="sr-only">Contraseña</label>
                      <input type="password" id="contrasenia" class="form-control" placeholder="Contraseña" required name="contraseniau" />
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="nombre" class="sr-only">Nombre</label>
                      <input type="text" id="nombre" class="form-control" placeholder="Nombre" required name="nombre" />
                    </div>
                    <div class="form-group">
                      <label for="apellidop" class="sr-only">Apellido Paterno</label>
                      <input type="text" id="apellidop" class="form-control" placeholder="Apellido Paterno" required name="apellidopat" />
                    </div>
                    <div class="form-group">
                      <label for="apellidom" class="sr-only">Apellido Materno</label>
                      <input type="text" id="apellidom" class="form-control" placeholder="Apellido Materno" required name="apellidomat" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-lg" value="Agregar"> 
                    </div>
                  </form>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>

        <div class="modal fade" id="moduser-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modificar Usuario para HelpDesk</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form>
                    <div class="form-group">
                      <label for="busquser" class="sr-only">Buscar Usuario</label>
                      <input type="text" id="busquser" class="form-control" placeholder="Nombre de Usuario" required autofocus name="nombreu" />
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-success btn-lg" value="Buscar" id="buscaruserbtn"> 
                    </div>
                  </form>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="form">
                    <div class="form-group">
                      <label for="nombreuser" class="sr-only">Nombre de Usuario</label>
                      <input type="text" id="nombreuseru" class="form-control" placeholder="Nombre de Usuario" required autofocus name="nombre_user" />
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox" id="restapass" value="">Restablecer Contraseña</label>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="nombre" class="sr-only">Nombre</label>
                      <input type="text" id="nombreu" class="form-control" placeholder="Nombre" required name="nombre_uu" />
                    </div>
                    <div class="form-group">
                      <label for="apellidopat" class="sr-only">Apellido Paterno</label>
                      <input type="text" id="apellidopu" class="form-control" placeholder="Apellido Paterno" required name="apellidopat" />
                    </div>
                    <div class="form-group">
                      <label for="apellidomat" class="sr-only">Apellido Materno</label>
                      <input type="text" id="apellidomu" class="form-control" placeholder="Apellido Materno" required name="apellidomat" />
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-success btn-lg" id="actualizaruserbtn" value="Actualizar"> 
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>

        <div class="modal fade" id="deluser-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Eliminar Usuario para HelpDesk</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form method="POST" action="php/eliminaruser.php">
                    <div class="form-group">
                      <label for="busquser" class="sr-only">Eliminar Usuario</label>
                      <input type="text" id="busquser" class="form-control" placeholder="Nombre de Usuario" required autofocus name="nombreu" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-lg" value="Eliminar"> 
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
        </div>

<!-- Start cuentas de usuario -->
        <div class="modal fade" id="cuentasUsuario-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Cuentas de Usuario</h4>
                </div>
                
                <div class="modal-body">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">
                                	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-user-plus"></i> Solicitar Cuenta de Usuario</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                            	<div class="panel-body">
                            		<div class="table-responsive">
					                  <table class="table table-striped">
					                    <thead>
					                      <tr>
					                        <th>#</th>
					                        <th>Usuario</th>
					                        <th>Cuenta</th>
					                        <th>Tipo</th>
					                        <th>Nombre</th>
					                        <th>Nombre de usuario</th>
					                        <th>Razon</th>
					                        <th>Estado</th>
					                        <th>Acciones</th>
					                      </tr>
					                    </thead>
					                    <tbody id="tbodyCuentasUsuario">
					                    </tbody>
					                  </table>
					                </div>
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
                            		<div class="table-responsive">
					                  <table class="table table-striped">
					                    <thead>
					                      <tr>
					                        <th>#</th>
					                        <th>Usuario</th>
					                        <th>Nombre del usuario</th>
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
        <!-- End cuentas de usuario -->

        <!-- Start solicitud equipo de red -->
        <div class="modal fade" id="plataformasVirtuales-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Plataformas virtuales</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Falla</th>
                        <th>Aula</th>
                        <th>Maquina</th>
                        <th>Hora</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="tbodyPlataformasVirtuales">
                    </tbody>
                  </table>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        

        <!-- Start solicitud equipo de red -->
        <div class="modal fade" id="solicitudEquipo-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Solicitud de equipo</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
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
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        
        
		<!-- Start reportes equipo de red -->
        <div class="modal fade" id="reporteDanios-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Reporte de daños</h4>
            </div>
                
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Aula</th>
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
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        
  

        <!-- Start instalacaion software de red -->
        <div class="modal fade" id="instalacionSoftware-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Instalacion de software</h4>
            </div>
                
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Aula</th>
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
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        
  
        <!-- Start solicitud software de red -->
        <div class="modal fade" id="solicitudSoftware-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Solicitud de software</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Software</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="tbodySolicitudSoftware">
                    </tbody>
                  </table>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        

        <!-- Start restricciones de red -->
        <div class="section-modal modal fade" id="restriccionesred-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Restricciones de red</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>direccion</th>
                        <th>descripcion</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Actividades</th>
                      </tr>
                    </thead>
                    <tbody id="tbodyRestricciones">
                    </tbody>
                  </table>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
        <script type="text/template" id="RestriccionRed">
          <tr>
            <td><%= direccion %></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </script>

<!-- Chat -->

<div class="popup-box chat-popup" id="qnimate">
            <div id="id_usuario" style="display: none;"></div>
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
                            <i class="fa fa-chevron-down" id="ocultarbtnchat"></i>
                        </button>
                </div>
            </div>
            <div class="popup-messages">
                <div class="direct-chat-messages" id="cuerpochat">
                </div>
            </div>
            <div class="popup-messages-footer">
                <textarea id="status_message" placeholder="Escribe un mensaje..." rows="10" cols="40" name="message"></textarea>
                <div class="btn-footer">
                 
                    <button class="bg_none pull-right" id="enviarmensaje"><i class="fa fa-paper-plane"></i> </button>
                </div>
            </div>
        </div>


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            NovaUniversitas
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script type="text/javascript" src="js/underscore-min.js"></script>
    <script type="text/javascript" src="js/backbone-min.js"></script>
    <script type="text/javascript" src="js/chatAdmin.js"></script>
    <script type="text/javascript" src="js/datosAdmin.js"></script>

    <!--<script type="text/javascript" src="js/administradorRestriccionesRed.js"></script>
        -->
  <script type="text/javascript">
  </script>
  </body>
</html>
