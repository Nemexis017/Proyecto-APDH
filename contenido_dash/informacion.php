<?php
    include('../librerias/consultasInfo.php');
    
    foreach($conteoDirectivos as $numeroD){
        $numeroDirectivos = $numeroD['total_directivos'];
    }
    foreach($conteoProfesores as $numeroPr){
        $numeroProfesores = $numeroPr['total_profesores'];
    }
    foreach($conteoPersonal as $numeroP){
        $numeroPersonal = $numeroP['total_personal'];
    }
    foreach($conteoEstudiantes as $numeroEs){
        $numeroEstudiantes = $numeroEs['total_estudiantes'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../componentes_dash/head_dash.php')?>
</head>
    <script src="../bootstrap/js/bootstrap.js"></script>

<body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">
        <!-- barra superio inicio -->
        <header class="header">
            <?php include('../componentes_dash/nav_dash.php')?>
        </header>
        <!-- barra superio fin -->

        <!-- barra lateral inicio -->
        <nav class="page-sidebar" id="sidebar">
            <?php include('../componentes_dash/barra_lateral.php')?>
        </nav>
        <!-- barra lateral final -->

        <!-- Contenido central inicio-->
        <div class="content-wrapper">
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numeroDirectivos ?></h2>
                                <div class="m-b-5">Directivos</div><i class="fa-solid fa-hammer widget-stat-icon"></i></i>
                                <div><small>Administradores</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numeroProfesores?></h2>
                                <div class="m-b-5">Profesores</div><i class="fa-solid fa-chalkboard-user widget-stat-icon"></i>
                                <div><small>Jornada</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numeroPersonal?></h2>
                                <div class="m-b-5">Personal de planta</div><i class="fa-solid fa-person-walking widget-stat-icon"></i>
                                <div><small>Mantenimiento y Servicios</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $numeroEstudiantes?></h2>
                                <div class="m-b-5">Estudiantes </div><i class="fa-solid fa-graduation-cap widget-stat-icon"></i>
                                <div><small>(gobierno Inemauxi)</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Municipios</div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Municipios</div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Municipios</div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CONTENIDO DE LA PÁGINA DE INICIO-->
            
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2024 © <b>INSTITUCION EDUCATIVA MARIA AUXILIADORA</b></div>
            </footer>
        </div>
        <!-- Contenido central inicio-->
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
    <div class="seccion-modales" id="seccion-modales">
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
                                    <option value="0" selected>Seleccione...</option>
                                    <option value="1" selected>directivo</option>
                                    <option value="4" selected>Personal De planta</option>
                                </select>

                            </div>
                            <div class="col-md-12">
                                <label for="txtTipoDocumentoId" class="form-label"><i class="obligacion">*</i>Tipo identificación</label>
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

        <!-- modal para actulizar start -->
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
        <!-- modal para actulizar final -->
    </div>
    
    <!-- sprind start -->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Espere...</div>
    </div>
    <!-- sprind start-->


    <!-- <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>     -->
    
    <!-- script individuales -->

    <script src="../js/json/listarGeneral.js"></script>
    <script src="../js/json/ejecutador.js"></script>
    <script src="../js/json/consultasOption.js"></script>

    <script src="../js/json/registrarJson.js"></script>
    <script src="../js/json/eliminarPersonal.js"></script>
    <script src="../js/json/actualizar.js"></script>
    <script src="../js/agregadosConsult/directivosQuery.js"></script>
    <script src="../js/agregadosConsult/personalPlanta.js"></script>
    <script src="../js/complementos/busqueda.js"></script>

    <!-- scripts generales -->
    <?php include('../componentes_dash/scripts.php')?>
</body>

</html>