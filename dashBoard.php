<?php
    // include('librerias/acceso.php');
    include('librerias/conexion.php');

    
    // inicio de sesion
    session_start();
    if($_SESSION['personaId']==false){
        header('Location:login.php');
    }else{
        // header('Location:dashBoard.php');
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Panel de control (ADM)</title>
    <!-- institución -->
    <link rel="icon" href="img/iconos/logoMauxi02.icon" />

    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <!-- PLUGINS STYLES-->
    <link href="assetsExte/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assetsExte/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
    <script src="bootstrap/js/bootstrap.js"></script>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- ENCABEZADO DE INICIO-->
        <header class="header">
            <div class="page-brand">
                <div class="col-12 d-flex justify-content-center">
                    <img src="img/iconos/logoMauxi02.icon" width="40px" />
                </div>
                <a class="link" href="index.html">
                    <span class="brand">
                        
                        <!-- <span class="brand-tip">CAST</span> -->
                    </span>
                    
                    <!-- <span class="brand-mini">ADM</span> -->
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- INICIO BARRA DE HERRAMIENTAS SUPERIOR IZQUIERDA-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- FINAL DE LA BARRA DE HERRAMIENTAS SUPERIOR IZQUIERDA -->

                <!-- INICIO BARRA DE HERRAMIENTAS SUPERIOR DERECHA-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 New</strong> Messages</span>
                                    <a class="pull-right" href="mailbox.html">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <!-- <img src="img/iconos/logoMauxi02.icon" /> -->
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <!-- <img src="./assets/img/users/u2.jpg" /> -->
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <!-- <img src="./assets/img/users/u3.jpg" /> -->
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <!-- <img src="./assets/img/users/u4.jpg" /> -->
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="img/iconos/admin.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="index.php"><i class="fa fa-power-off"></i>Salir</a>
                        </ul>
                    </li>
                </ul>
                <!-- FINAL DE LA BARRA DE HERRAMIENTAS SUPERIOR DERECHA -->
            </div>
        </header>
        <!-- ENCABEZADO FINAL -->

        <!-- ********************************************* BARRA LATERAL DE INICIO **********************************************-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div class="admin-info">
                        <div class="font-strong">Alirio (Rector)</div><small>Administrator</small></div>   
                </div>
                <ul class="side-menu metismenu not-sub">
                    <li>
                        <a class="active not-sub" href="dashBoard.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Inicio</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="panels.html">Panels</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="alerts_tooltips.html">Alerts &amp; Tooltips</a>
                            </li>
                            <li>
                                <a href="badges_progress.html">Badges &amp; Progress</a>
                            </li>
                            <li>
                                <a href="lists.html">List</a>
                            </li>
                            <li>
                                <a href="cards.html">Card</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- ********************************************* BARRA LATERAL DE INICIO(FIN) ********************************************** -->

        <!-- END SIDEBAR-->
        <div class="content-wrapper">

            <!-- CONTENIDO DE LA PÁGINA DE INICIO-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            Registros del personal
                            <!-- <button><img src="img/iconos/refrescar.png" alt="" width="30px"></button> -->
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table" id="tabla-admin">
                                <thead>
                                    <tr>
                                        <th width="50px">N°</th>
                                        <th>Clasificacion</th>
                                        <th>Tipo Identificación</th>
                                        <th>Numero Identificación</th>
                                        <th>Nombres</th>
                                        <th>Primer apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <!-- js muestra la tabla -->
            
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            registrar
                        </button>
                        
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- COMENZAR EL PANEL DE CONFIGURACIÓN DEL TEMAL-->
    <div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">AJUSTES</div>
            <div class="font-strong">OPCIONES DE DISEÑO</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Barra de navegación fija</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Diseño fijo</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox" checked>
                    <span class="input-span"></span>Contraer barra lateral</label>
            </div>
            
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Personal Institucional</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!-- *************************************** cuerpo del modal(inicio) *************************************** -->
                <form id="form-registrar" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <i class="aviso-obligacion">los campos obligatorios contienen<i class="obligacion">*</i></i>
                    </div>
                    <div class="col-md-12">
                        <label for="selTipoIdentificacion" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                        <select class="form-select" aria-label="Default select example" id="txtTipoPersonaId"
                            name="txtTipoPersonaId" required>
                            <option value="" selected>Seleccione...</option>
                            
                        </select>

                    </div>
                    <div class="col-md-12">
                        <label for="txtTipoDocumentoId" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                        <select class="form-select" aria-label="Default select example" id="txtTipoDocumentoId"
                            name="txtTipoDocumentoId" required>
                            <option value="" selected>Seleccione...</option>
                            
                        </select>

                    </div>
                    <div class="col-md-12">
                        <label for="txtIdentificacion" class="form-label"><i class="obligacion">*</i> Identificación</label>
                        <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion"
                            required>
                        <div class="valid-feedback">
                            Digitar el numero de Indentificacion
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtCargo" class="form-label"><i class="obligacion">*</i> Cargo</label>
                        <input type="text" class="form-control" id="txtCargo" name="txtCargo"
                            required>
                        <div class="valid-feedback">
                            Digitar El cargo
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtNombres" class="form-label"><i class="obligacion">*</i> Primer nombre</label>
                        <input type="text" class="form-control" id="txtNombres" name="txtNombres"
                            required>
                        <div class="valid-feedback">
                            Digitar sus nombres
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtPrimerApellido" class="form-label"><i class="obligacion">*</i> Primer apellido</label>
                        <input type="text" class="form-control" id="txtPrimerApellido" name="txtPrimerApellido"
                            required>
                        <div class="valid-feedback">
                            Digitar el primer apellido
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="txtSegundoApellido" class="form-label"><i class="obligacion">*</i> Segundo apellido</label>
                        <input type="text" class="form-control" id="txtSegundoApellido" name="txtSegundoApellido"
                            required>
                        <div class="valid-feedback">
                            Digitar el segundo apellido
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="setMunicipioResidencia" class="form-label"><i class="obligacion">*</i> Municipio Residencia </label>
                        <select class="form-select" aria-label="Default select example" id="setMunicipioResidencia"
                            name="setMunicipioResidencia" required>
                            <option value="" selected>Seleccione...</option>
                            
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="selMunicipioNacimiento" class="form-label"><i class="obligacion">*</i> Municipio Nacimiento</label>
                        <select class="form-select" aria-label="Default select example" id="selMunicipioNacimiento"
                            name="selMunicipioNacimiento" required>
                            <option value="" selected>Seleccione...</option>
                            

                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="txtTelefono" class="form-label"><i class="obligacion">*</i> Telefono</label>
                        <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" required>
                        <div class="valid-feedback">
                            Digitar el telefono
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="selFechaNacimiento" class="form-label"> <i class="obligacion">*</i> Fecha Nacimieto</label>
                        <input type="date" class="form-control" id="selFechaNacimiento" name="selFechaNacimiento"
                            required>
                        <div class="valid-feedback">
                            Seleccione la fecha de nacimiento
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Correo Eletronico</label>
                        <input type="text" class="form-control" id="txtCorreoEletronico" name="txtCorreoEletronico"
                            required>
                        <div class="valid-feedback">
                            Digitar el correo eletronico
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtExperiencia" class="form-label"><i class="obligacion">*</i> Experiencia Laboral</label>
                        <textarea type="text" class="form-control" id="txtExperiencia" name="txtExperiencia"
                            required></textarea>
                        <div class="valid-feedback">
                            Digitar Experiencia Laboral
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="numAnosExperiencia" class="form-label"><i class="obligacion">*</i> Años De Experiencia</label>
                        <input type="number" class="form-control" id="numAnosExperiencia" name="numAnosExperiencia"
                            required>
                        <div class="valid-feedback">
                            Digitar Años De Experiencia
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Estudios Realizados</label>
                        <textarea type="text" class="form-control" id="txtEstudiosRealizados" name="txtEstudiosRealizados"
                            required></textarea>
                        <div class="valid-feedback">
                            Digitar Los Estudios Realizados
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="botonCerrar" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btnRegistrar">Registrar</button>
                    </div>
                </form>
            <!-- *************************************** cuerpo del modal(Fin) *************************************** -->
            </div>
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="js/refrescar.js"></script>
    <script src="js/json/listarGeneral.js"></script>
    <script src="js/json/tipoPersona.js"></script>
    <script src="js/json/tipoDocumento.js"></script>
    <script src="js/json/municipio.js"></script>
    <script src="js/json/registrarJson.js"></script>
    <script src="js/json/eliminarPersonal.js"></script>


    
    <!-- <script src="assetsExte/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script> -->
    <!-- <script src="assetsExte/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script> -->
    
    <!-- js importantes -->
    <script src="assetsExte/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/metisMenu/dist/metisMenu.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assetsExte/js/app.min.js" type="text/javascript"></script>

    <!-- *********************************************************** -->

    <!-- PAGE LEVEL PLUGINS-->
    <!-- <script src="assetsExte/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script> -->
    <!-- <script src="assetsExte/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script> -->
    <!-- <script src="assetsExte/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script> -->
    <!-- <script src="assetsExte/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script> -->
    <!-- CORE SCRIPTS-->
    <!-- PAGE LEVEL SCRIPTS-->
    <!-- <script src="assetsExte/js/scripts/dashboard_1_demo.js" type="text/javascript"></script> -->
</body>

</html>