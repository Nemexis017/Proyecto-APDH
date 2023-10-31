<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Panel de control (ADM)</title>
    <!-- institución -->
    <link rel="icon" href="img/iconos/logoMauxi02.icon" />
    <link rel="stylesheet" href="css/style_private.css">

    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <!-- PLUGINS STYLES-->
    <link href="assetsExte/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assetsExte/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
    <script src="bootstrap/js/bootstrap.js"></script>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- ENCABEZADO DE INICIO-->
        <header class="header">
            <?php include('componentes_dash/barra_lateral.php')?>
        </header>
        <!-- ENCABEZADO FINAL -->

        <!-- ********************************************* BARRA LATERAL DE INICIO **********************************************-->
        <nav class="page-sidebar" id="sidebar" >
            <?php include('componentes_dash/barra_lateral.php')?>
        </nav>
        <!-- ********************************************* BARRA LATERAL DE INICIO(FIN) ********************************************** -->
        <!-- END SIDEBAR-->
        <div class="content-wrapper">


            <footer class="page-footer">
                
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
    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="label-modal-1" aria-hidden="true">
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
                            <select class="form-select municipioResidencia" aria-label="Default select example" id="setMunicipioResidencia"
                                name="setMunicipioResidencia" required>
                                <option value="" selected>Seleccione...</option>
                                
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="selMunicipioNacimiento" class="form-label"><i class="obligacion">*</i> Municipio Nacimiento</label>
                            <select class="form-select municipioNacimiento" aria-label="Default select example" id="selMunicipioNacimiento"
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
                            <button type="button" class="btn btn-primary btn_registrar" id="btnRegistrar">Registrar</button>
                        </div>
                    </form>
                    <!-- *************************************** cuerpo del modal(Fin) *************************************** -->
                </div>
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
    

    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->

    <!-- crud -->
    <!-- <script src="js/refrescar.js"></script>
    <script src="js/json/listarGeneral.js"></script>
    <script src="js/json/tipoPersona.js"></script>
    <script src="js/json/tipoDocumento.js"></script>
    <script src="js/json/municipio.js"></script>
    <script src="js/json/registrarJson.js"></script>
    <script src="js/json/eliminarPersonal.js"></script>
    <script src="js/json/actualizar.js"></script>
    <script src="js/alerta.js"></script> -->


    
    <!-- js importantes -->
    <script src="assetsExte/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/metisMenu/dist/metisMenu.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assetsExte/js/app.min.js" type="text/javascript"></script>

</body>

</html>