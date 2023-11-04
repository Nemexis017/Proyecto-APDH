<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../componentes_dash/head_dash.php')?>
</head>
    <script src="../bootstrap/js/bootstrap.js"></script>

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
        <div class="content-wrapper">
            <div class="page-content fade-in-up">
                <div class="row">
                    <!-- caja modal 1 inicio-->
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Registros de Profesores</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            
                            <!-- cuerpo del caja modal -->
                            <div class="ibox-body">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table tabla-profesores" id="tabla-profesores">
                                            <thead>
                                                <tr>
                                                    <th width="50px">N°</th>
                                                    <th>Tipo Documento</th>
                                                    <th>Identificación</th>
                                                    <th>Materia</th>
                                                    <th>Nombres</th>
                                                    <th>Primer apellido</th>
                                                    <th>Segundo Apellido</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <!-- js muestra la tabla -->
                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-1">
                                            <i class="fa-solid fa-user-plus"></i> registrar
                                        </button>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <!-- caja modal 2 inicio-->
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
    <!-- Modal Alerta de borrar -->
    <div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="modal-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estas seguro de eliminar este registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table" id="tabla-verificacion">
                            <thead>
                                <tr>
                                    <th>N° Identificacion</th>
                                    <th>Nombres</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- js muestra la tabla -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="cerrar_veri" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button id="aceptar_veri" type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal para actulizar -->
    <div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="label-modal-3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Informacion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- *************************************** cuerpo del modal(inicio) *************************************** -->
                    <form id="form-update" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <i class="aviso-obligacion">los campos obligatorios contienen<i class="obligacion">*</i></i>
                        </div>

                        <!-- desarrollado por js actualizar.js -->
                    </form>
    
                    <!-- *************************************** cuerpo del modal(Fin) *************************************** -->
                </div>
            </div>
        </div>
    </div>

    <script src="../js/json/prConsulta.js"></script>
    

    <!-- script general -->
    <?php include('../componentes_dash/scripts.php')?>

    <!-- *********************************************************** -->
</body>

</html>