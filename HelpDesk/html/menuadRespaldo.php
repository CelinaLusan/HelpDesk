<?php
    session_start();
    echo "<br>".$_SESSION['usuario'];
    echo "<br>".$_SESSION['user'];
    echo "<br>".$_SESSION['tipo'];
    echo "<br>".$_SESSION['id_usuario'];

?>
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
        <script type="text/template" id="tcuentas">
            <div class="row grey lighten-5">
                <div class="col l6">
                    <h6>Solicitar Cuenta de Usuario</h6>
                    <form>
                        <div class="input-field">
                            <label for="nom">Nombre Completo</label>
                            <input type="text" name="nom" id="nom"/>
                        </div>
                        <div class="input-field">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" id="cargo"/>
                        </div>
                        <div class="input-field">
                            <label for="nusuario">Nombre de Usuario</label>
                            <input type="text" name="nusuario" id="nusuario"/>
                        </div>
                    </form>
                </div>
                <div class="col l6">
                    <div>
                        <label for="razon">Razon</label>
                        <textarea id="razon" cols="6" rows="6"></textarea>
                    </div>
                    <br>
                    <div class="input-field">	
                        <p><b>Nota: </b></p>	
                    </div>
                    <div class="submit">
                        <button class="btn btn-waves blue">Enviar</button>
                    </div>
                </div>
            </div>
        </script>
        <script type="text/template" id="tsolieq">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">
                        <div class="input-field">	
                            <label for="nombre">Nombre del equipo</label>
                            <input type="text" name="nombre" id="nombre">	
                        </div>
                        <div class="input-field">	
                            <label for="periodo">Periodo de uso</label>
                            <input type="text" name="periodo" id="periodo">	
                        </div>
                        <div class="input-field">	
                            <label for="solicitante">Solicitante</label>
                            <input type="text" name="solicitante" id="solicitante">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="razon">Razon</label>
                            <textarea id="razon" cols="6" rows="6"></textarea>
                        </div>
                        <br>
                        <div class="input-field">	
                            <label for="lugar">Lugar donde se ocupará el equipo</label>
                            <input type="text" name="lugar" id="lugar">	
                        </div>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <script type="text/template" id="trepdaños">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">

                        <div class="input-field">	
                            <label for="aula">Aula</label>
                            <input type="text" name="aula" id="aula">	
                        </div>
                        <div class="input-field">	
                            <label for="maquina">Maquina</label>
                            <input type="text" name="maquina" id="maquina">	
                        </div>
                        <div class="input-field">	
                            <label for="hora">Hora de la falla</label>
                            <input type="text" name="hora" id="hora">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="razon">Razon</label>
                            <textarea id="razon" cols="6" rows="6"></textarea>
                        </div>
                        <br>
                        <div class="input-field">	
                            <label for="solicitante">Nombre de quien reporta</label>
                            <input type="text" name="solicitante" id="solicitante">	
                        </div>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <script type="text/template" id="tinstsoft">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">

                        <div class="input-field">	
                            <label for="aula">Aula</label>
                            <input type="text" name="aula" id="aula">	
                        </div>
                        <div class="input-field">	
                            <label for="maquina">Maquina</label>
                            <input type="text" name="maquina" id="maquina">	
                        </div>
                        <div class="input-field">	
                            <label for="software">Software a instalar</label>
                            <input type="text" name="software" id="software">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="razon">Razon</label>
                            <textarea id="razon" cols="6" rows="6"></textarea>
                        </div>
                        <br>
                        <div class="input-field">	
                            <label for="solicitante">Solicitante</label>
                            <input type="text" name="solicitante" id="solicitante">	
                        </div>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <script type="text/template" id="tsolsoft">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">

                        <div class="input-field">	
                            <label for="aula">Aula</label>
                            <input type="text" name="aula" id="aula">	
                        </div>
                        <div class="input-field">	
                            <label for="maquina">Maquina</label>
                            <input type="text" name="maquina" id="maquina">	
                        </div>
                        <div class="input-field">	
                            <label for="hora">Hora de la falla</label>
                            <input type="text" name="hora" id="hora">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="descripcion">Desripción de la falla</label>
                            <textarea id="descripcion" cols="6" rows="6"></textarea>
                        </div>
                        <br>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <script type="text/template" id="tred">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">

                        <div class="input-field">	
                            <label for="aula">Aula</label>
                            <input type="text" name="aula" id="aula">	
                        </div>
                        <div class="input-field">	
                            <label for="direccion">Dirección restringida</label>
                            <input type="text" name="direccion" id="direccion">	
                        </div>
                        <div class="input-field">	
                            <label for="solicitante">Solicitante</label>
                            <input type="text" name="solicitante" id="solicitante">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="razon">Razón</label>
                            <textarea id="razon" cols="6" rows="6"></textarea>
                        </div>
                        <div class="input-field">	
                            <label for="hora">Hora</label>
                            <input type="text" name="hora" id="hora">	
                        </div>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <script type="text/template" id="tequipext">
            <div class="row grey lighten-5">
                <form>
                    <div class="col l5 offset-l1">
                        <div class="input-field">	
                            <label for="solicitante">Solicitante</label>
                            <input type="text" name="solicitante" id="solicitante">	
                        </div>
                        <div class="input-field">	
                            <label for="equipo">Equipo</label>
                            <input type="text" name="equipo" id="equipo">	
                        </div>
                        <div class="input-field">	
                            <label for="tipoConfiguracion">Tipo de configuración</label>
                            <input type="text" name="tipoConfiguracion" id="tipoConfiguracion">	
                        </div>
                    </div>
                    <div class="col l5">
                        <div>
                            <label for="razon">Razón</label>
                            <textarea rows="8" cols="30" id="razon"></textarea>
                        </div>
                        <br>
                        <div class="submit">
                            <button class="btn btn-waves blue">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </script>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/underscore-min.js"></script>
        <script type="text/javascript" src="../js/backbone-min.js"></script>
        <script type="text/javascript" src="../js/principal.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <!--<script type="text/javascript" src="../js/plugins.min.js"></script>-->
    </body>
</html>