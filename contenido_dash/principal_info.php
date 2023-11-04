<?php
    session_start();
    if($_SESSION['personaId'] == false){
        header('Location:../login.php');
    }else{
        // header('Location:dashBoard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../componentes_dash/head_dash.php')?>
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">

        <!-- ENCABEZADO DE INICIO-->
        <header class="header">
            <?php include('../componentes_dash/nav_dash.php')?>
        </header>
        <!-- ENCABEZADO FINAL -->

        <nav class="page-sidebar" id="sidebar">
            <?php include('../componentes_dash/barra_lateral.php')?>
        </nav>

        <!-- END SIDEBAR-->

        <!-- contenido del body dash -->
        <div class="content-wrapper" id="contenido">
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
                                <table class="table table_admin">
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
    <div class="contenido_dos" id="contenido_dos">

    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

    <!-- Modal -->
    <button style="display:none" id="alertaSession" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSession">
    </button>
    <div class="modal fade" id="modalSession" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSession" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
        </div>
        </div>
    </div>
    </div>


    <script src="../js/json/usuarios_dash.js"></script> 
    <script src="../js/complementos/notRetros.js"></script> 
    <?php include('../componentes_dash/scripts.php')?>
</body>

</html>