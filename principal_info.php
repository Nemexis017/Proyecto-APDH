<?php
    // include('librerias/acceso.php');
    include('librerias/conexion.php');
    // include('librerias/');

    // inicio de sesion
    session_start();
    if($_SESSION['personaId']==false){
        header('Location:login.php');
    }else{
        // header('Location:dashBoard.php');
    }
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <?php include('componentes_dash/head_dash.php')?>
</head>
    <script src="bootstrap/js/bootstrap.js"></script>

<body class="fixed-navbar">
    <div class="page-wrapper" >

        <!-- ENCABEZADO DE INICIO-->
        <header class="header">
            <?php include('componentes_dash/nav_dash.php')?>
        </header>
        <!-- ENCABEZADO FINAL -->

        <nav class="page-sidebar" id="sidebar">
            <?php include('componentes_dash/barra_lateral.php')?>
        </nav>

        <!-- END SIDEBAR-->

        <!-- contenido del body dash -->
        <div class="content-wrapper">
            <div class="page-content fade-in-up">
                <div class="row">
                    <!-- caja modal 1 inicio-->
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Informacion general</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <!-- cuerpo del caja modal -->
                            <div class="ibox-body">
                                <div class="col-md-12">
                                    <h2 class="font-bold">Bienvenidos al Dashboard de la Institución Educativa María Auxiliadora</h2>
                                    <p>

                                        En la era digital, la gestión eficiente de los recursos educativos y la administración de datos se vuelven esenciales para garantizar el funcionamiento óptimo de nuestra querida institución, la María Auxiliadora.
                                        Con ese fin, hemos desarrollado un avanzado sistema de administración que coloca en tus manos el control total sobre nuestra base de datos de profesores y personal, así como la gestión del gobierno estudiantil.
                                    </p>
                                </div>
                            </div>  
                        </div>
                        <!-- caja modal 2 inicio-->
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Administradores Disponibles</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table_usuarios">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>N°</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Usuario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <a href=""><button class="btn btn-info btn-fix"> Ver Estado de usuarios</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page-footer">
                <div class="font-13">2024 © <b>INSTITUCION EDUCATIVA MARIA AUXILIADORA</b></div>
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
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <!-- <script src="js/refrescar.js"></script>
    <script src="js/json/listarGeneral.js"></script>
    <script src="js/json/tipoPersona.js"></script>
    <script src="js/json/tipoDocumento.js"></script>
    <script src="js/json/municipio.js"></script>
    <script src="js/json/registrarJson.js"></script>
    <script src="js/json/eliminarPersonal.js"></script>
    <script src="js/json/actualizar.js"></script>
    <script src="js/json/consulta_individual.js"></script>
    <script src="js/alerta.js"></script> -->
    <script src="js/json/usuarios_dash.js"></script> 
    


    
    
    <!-- js importantes -->
    <script src="assetsExte/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/metisMenu/dist/metisMenu.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assetsExte/js/app.min.js" type="text/javascript"></script>

    <!-- *********************************************************** -->
</body>

</html>