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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
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
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
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
                            
                            <a href="#cuentauser-modal" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a>Plataformas Virtuales</a>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                         
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>
                            <a>Solicitud de Equipo</a>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>4</td>
                          <td>
                            <a>Reporte de daños</a>
                            
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                          <tr>
                          <td>5</td>
                          <td>
                            <a>Instalación de software</a>
                           
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                            <tr>
                          <td>6</td>
                          <td>
                            <a>Solicitud de software</a>
                           
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
                          </td>
                        </tr>
                            <tr>
                          <td>7</td>
                          <td>
                            <a>Restricciones de Red</a>
                           
                          </td>
                          <td>
                            <a href="#restriccionesred-modal" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-folder"></i> Ver </a>
                           
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar todo</a>
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
        <!-- /page content -->


<!-- Start cuentas de usuario -->
        <div class="section-modal modal fade" id="cuentauser-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Cuentas de Usuario</h4>
                </div>
                
                <div class="modal-body">
                   
                    
                    <div class="row">
                      <div class="table-responsive">
                      <!--
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Nombre de Usuario</th>
                  <th>Tipo de cargo</th>
                  <th>Razon</th>
                  <th>Estatus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                  <td>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a> 
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar</a>
                </td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>-->
          </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
        <!-- End cuentas de usuario -->

        <!-- Start cuentas de usuario -->
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
                        <th>Nombre</th>
                        <th>Nombre de Usuario</th>
                        <th>Tipo de cargo</th>
                        <th>Razon</th>
                        <th>Estatus</th>
                      </tr>
                    </thead>
                    <tbody id="tableRestriccionRed">
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
            <div class="popup-head">
                <div class="popup-head-left pull-left"><img src="images/user.png" alt="iamgurdeeposahan">Administrador</div>
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
    <!--<script type="text/javascript" src="js/administradorRestriccionesRed.js"></script>
        -->
   <script type="text/javascript">
            
    </script>
  </body>
</html>