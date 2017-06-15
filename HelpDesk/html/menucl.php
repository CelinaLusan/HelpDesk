<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="../css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="../css/custom.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="cyan">
        <!-- Start Page Loading -->
        <div id="todo">
            <!--<div id="loader-wrapper">
                <div id="loader"></div>        
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>-->
            <!-- End Page Loading -->
            <nav class="top-nav cyan">
                <div class="nav-wrapper">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <ul class="side-nav fixed" id="mobile-demo">
                        <li class="center"><img src="../img/nova.jpeg" class="circle responsive-img valign profile-image-login"/>
                        </li>
                        <li><a href="#" class="waves-effect" id="directorio">Directorio</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="cuentas">Cuentas de Usuario</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="plataformas">Plataformas Virtuales</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="solieq">Solicitud de Equipo</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="repdaños">Reportes de Daños</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="instsoft">Instalación de Software</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="solsoft">Solicitud de Software</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="red">Restricciones de Red</a>
                        </li>
                        <li><a href="#" class="waves-effect" id="equipext">Equipos Externos</a>
                        </li>
                    </ul>
                </div>
            </nav>
			<div class="row">
				<a href="#">Cerrar session</a>
			</div>
            <div class="row">
                <div class="col s9 offset-s3" id="cuerpo">
                    
                </div>
            </div>
            <footer></footer>
        </div> 
        <script type="text/template" id="tdirectorio">
            <div class="row">
                <div class="col s12 grey lighten-5">
                    <div class="row">
                        <div class="col s12">
                            <a href="#" class="blue-text">Rectoria</a>
                            <div class="row">
                                <div class="col s12">
                                    L. C. E. Pablo Manuel Acevedo Luria 
Secretario Particular del Rector 
pacevedo@jacinto.novauniversitas.edu.mx 
Tel.: (951) 501 72 00, 501 72 07, 501 72 08, Ext. 1031
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    M.E.C. Josué Neftalí García Matías 
Vice-Rector Académico 
vice_acad@jacinto.novauniversitas.edu.mx
                                </div>
                                <div class="col s6">
                                    L.C.E. Adaelvi Moya Solano 
Vice-Rector Administrativo 
vice_admin@jacinto.novauniversitas.edu.mx
                                </div>
                            </div>
                        </div>
                        <!--<div class="col s4">
                            <a href="#" class="blue-text">Jefes de carrera</a>
                        </div>
                        <div class="col s4">
                            <a href="#" class="blue-text">Personal Administrativo</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </script>
        <script type="text/template" id="tplataformas">
            <div class="row grey lighten-5">
                <h3 class="center">Plataformas Virtuales</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Aula</td>
                                <td>Maquina</td>
                                <td>Hora de la falla</td>
                                <td>Descripción de la falla</td>
                                <td>Falla</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Aula virtual</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Kabl</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </script>
        <script type="text/template" id="tcuentas">
            <div class="row grey lighten-5">
                <h3 class="center">Cuentas de Usuario</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Nombre Completo</td>
                                <td>Cargo</td>
                                <td>Nombre de Usuario</td>
                                <td>Razon</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="tsolieq">
            <div class="row grey lighten-5">
                <h3 class="center">Solicitud de equipo</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Nombre equipo</td>
                                <td>Periodo de uso</td>
                                <td>Solicitante</td>
                                <td>Razón</td>
                                <td>Lugar</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="trepdaños">
            <div class="row grey lighten-5">
                <h3 class="center">Reporte de daños a equipos</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Aula</td>
                                <td>Equipo</td>
                                <td>Hora de la falla</td>
                                <td>Descripción</td>
                                <td>Nombre de quien reporta</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="tinstsoft">
            <div class="row grey lighten-5">
                <h3 class="center">Permisos de instalacion de software</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Aula</td>
                                <td>Maquina</td>
                                <td>Software a instalar</td>
                                <td>Razón</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="tsolsoft">
            <div class="row grey lighten-5">
                <h3 class="center">Solicutud de software</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Aula</td>
                                <td>Maquina</td>
                                <td>Hora</td>
                                <td>Descripcion</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="tred">
            <div class="row grey lighten-5">
                <h3 class="center">Restricciones de red</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Aula</td>
                                <td>Direccion Restringida</td>
                                <td>Razón</td>
                                <td>Hora</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large orange darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red darken-2 tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="Terminado" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <script type="text/template" id="tequipext">
            <div class="row grey lighten-5">
                <h3 class="center">Configuración de equipos externos</h3>
                <div class="col l12">
                    <table>
                        <thead>
                            <tr>
                                <td>Solicitante</td>
                                <td>Equipo</td>
                                <td>Tipo de configuración</td>
                                <td>Razón</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light orange darken-2 tooltipped modal-trigger" href="#" data-position="bottom" data-delay="50" data-tooltip="Pendiente" ><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </script>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/underscore-min.js"></script>
        <script type="text/javascript" src="../js/backbone-min.js"></script>
        <script type="text/javascript" src="../js/principal2.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <!--<script type="text/javascript" src="../js/plugins.min.js"></script>-->
    </body>
</html>