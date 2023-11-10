<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../componentes_dash/head_dash.php')?>
</head>
    <script src="../bootstrap/js/bootstrap.js"></script>

<body class="fixed-navbar sidebar-mini">
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
                                                    <th>Materia</th>
                                                    <th>Identificación</th>
                                                    <th>Nombres</th>
                                                    <th>Primer apellido</th>
                                                    <th>Segundo Apellido</th>
                                                    <th>sede</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <!-- js muestra la tabla -->
                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-1" id="registrarProfesores">
                                            <i class="fa-solid fa-user-plus"></i> registrar
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <!-- caja modal 2 inicio-->
                    </div>
                    <div class="container">
                        <div class="col-12">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Detalles</div>
                            </div>
                            <!-- cuerpo del caja modal -->
                            <div class="ibox-body">
                                <div class="clf">
                                    <ul class="nav nav-tabs tabs-line nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#tab-11-1" data-toggle="tab" aria-expanded="false"><i class="fa fa-line-chart"></i> First</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab-11-2" data-toggle="tab" aria-expanded="false"><i class="fa fa-heartbeat"></i> Second</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab-11-3" data-toggle="tab" aria-expanded="true"><i class="fa fa-life-ring"></i> Third</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-11-1" aria-expanded="false">
                                            <ul class="list-group list-group-bordered">
                                                <li class="">1</li>
                                                <li class="">2</li>
                                                <li class="">3</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="tab-11-2" aria-expanded="false">
    
                                        </div>
                                        <div class="tab-pane fade" id="tab-11-3" aria-expanded="true">
    
                                        </div>
                                    </div>
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


    <!-- modal para registro de profesores -->
    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="label-modal-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de profesores</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- *************************************** cuerpo del modal(inicio) *************************************** -->
                    <form id="form-registrarProfesores" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <i class="aviso-obligacion">los campos obligatorios contienen<i class="obligacion">*</i></i>
                        </div>
                        <div class="col-md-12">
                            <label for="prTipoPersonaId" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                            <select class="form-select" aria-label="Default select example" id="prTipoPersonaId"
                                name="prTipoPersonaId" required>
                                <option value="" selected>Seleccione...</option>
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="prTipoDocumentoId" class="form-label"><i class="obligacion">*</i> Tipo Documento</label>
                            <select class="form-select" aria-label="Default select example" id="prTipoDocumentoId"
                                name="prTipoDocumentoId" required>
                                <option value="" selected>Seleccione...</option>
                                
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="prIdentificacion" class="form-label"><i class="obligacion">*</i> Identificación</label>
                            <input type="text" class="form-control" id="prIdentificacion" name="prIdentificacion"
                                required>
                            <div class="valid-feedback">
                                Digitar el numero de Indentificacion
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="prNombres" class="form-label"><i class="obligacion">*</i> Primer nombre</label>
                            <input type="text" class="form-control" id="prNombres" name="prNombres"
                                required>
                            <div class="valid-feedback">
                                Digitar sus nombres
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="prPrimerApellido" class="form-label"><i class="obligacion">*</i> Primer apellido</label>
                            <input type="text" class="form-control" id="prPrimerApellido" name="prPrimerApellido"
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
                            <label for="sedeInstitucionalId" class="form-label"><i class="obligacion">*</i>Sede intitucional</label>
                            <select class="form-select" aria-label="Default select example" id="sedeInstitucionalId"
                                name="sedeInstitucionalId" required>
                                <option value="" selected>Seleccione...</option>
                                
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="prMateria" class="form-label"><i class="obligacion">*</i>Materias asignada</label>
                            <input type="text" class="form-control" id="prMateria" name="prMateria"
                                required>
                            <div class="valid-feedback">
                                Digite la materia
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
                            <select class="form-select prMunicipioNacimiento" aria-label="Default select example" id="prMunicipioNacimiento"
                                name="prMunicipioNacimiento" required>
                                <option value="" selected>Seleccione...</option>
                            
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="prTelefono" class="form-label"><i class="obligacion">*</i> Telefono</label>
                            <input type="text" class="form-control" id="prTelefono" name="prTelefono" required>
                            <div class="valid-feedback">
                                Digitar el telefono
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="prFechaNacimiento" class="form-label"> <i class="obligacion">*</i> Fecha Nacimieto</label>
                            <input type="date" class="form-control" id="prFechaNacimiento" name="prFechaNacimiento"
                                required>
                            <div class="valid-feedback">
                                Seleccione la fecha de nacimiento
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Correo Electrónico</label>
                            <input type="text" class="form-control" id="txtCorreoEletronico" name="txtCorreoEletronico"
                                required>
                            <div class="valid-feedback">
                                Digitar el correo eletronico
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
                            <label for="prExperiencia" class="form-label"><i class="obligacion">*</i>Experiencia</label>
                            <textarea type="text" class="form-control" id="prExperiencia" name="prExperiencia"
                                required></textarea>
                            <div class="valid-feedback">
                                Digitar Los Estudios Realizados
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i>Titulos</label>
                            <textarea type="text" class="form-control" id="txtEstudiosRealizados" name="txtEstudiosRealizados"
                                required></textarea>
                            <div class="valid-feedback">
                                Digitar Los Estudios Realizados
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="prGobierno" class="form-label"><i class="obligacion">*</i>Gobierno Institucional</label>
                            <select class="form-select prGobiernoEstudiantil" aria-label="Default select example" id="prGobierno"
                                name="prGobierno" required>
                                <option value="" selected>Seleccione...</option>
                            </select>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="botonCerrar" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary btn_registrar" id="recordTeacher">Registrar</button>
                        </div>
                    </form>
                    <!-- *************************************** cuerpo del modal(Fin) *************************************** -->
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Alerta de borrar -->
    <div class="modal fade" id="profesores-delete" tabindex="-1" aria-labelledby="profesores-delete" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profesores-delete">¿Estas seguro de eliminar este registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table tablaVerifProfesores" id="">
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
                    <button id="closeDeletePr" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button id="deleteProfesor" type="button" class="btn btn-primary">Aceptar</button>
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

    <script src="../js/agregadosConsult/prConsulta.js"></script>
    <script src="../js/agregadosConsult/mainRegistar.js"></script>

    <script src="../js/json/consultasOption.js"></script>
    <script src="../js/crudProfesores/registrarPr.js"></script>
    <script src="../js/crudProfesores/borrrar.js"></script>
    

    <!-- script general -->
    <?php include('../componentes_dash/scripts.php')?>

    <!-- *********************************************************** -->
</body>

</html>