<?php 
    include('librerias/conexion.php');
    $conexion= new conexion();

    $sqlTipoPersona= "SELECT * FROM mauxi.tipopersona";
    $sqlTipoDocumento= "SELECT * FROM mauxi.tipodocumento";
    $sqlmunicipioResultado= "SELECT * FROM mauxi.municipio";

    $tipoPersonaTabla= $conexion->consulta($sqlTipoPersona);
    $tipoDocumentoTabla= $conexion->consulta($sqlTipoDocumento);
    $municipioResultadoTabla= $conexion->consulta($sqlmunicipioResultado);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Registrese</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assetsExte/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="assetsExte/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html"></a>
        </div>
        <form id="register-form" action="librerias/registrar.php" method="post" class="needs-validation" novalidate>
            <h2 class="login-title">Registrarse</h2>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <select name="selTipoPersona" id="selTipoPersona" class="form-control" required>
                            <option value="0" >Tipo de persona</option>
                            <?php
                                foreach($tipoPersonaTabla as $tipoPersona){
                                    $tipoPersonaId = $tipoPersona['tipoPersonaId'];
                                    $tipoPersonaNombre = $tipoPersona['tipoPersonaNombre'];

                                    echo "<option value='".$tipoPersonaId."'>".$tipoPersonaNombre."</option>";
                                }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <select name="selTipoDocumento" id="selTipoDocumento" class="form-control" required>
                            <option value="0" >Tipo de Documento</option>
                            <?php
                                foreach($tipoDocumentoTabla as $tipoDocumento){
                                    $tipoDocumentoId = $tipoDocumento['tipoDocumentoId'];
                                    $tipoDocumentoNombre = $tipoDocumento['tipoDocumentoNombre'];
                                    $tipoDocumentoSigla = $tipoDocumento['tipoDocumentoSigla'];

                                    echo "<option value='".$tipoDocumentoId."' >".$tipoDocumentoNombre."</option>";
                                }
                            
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="txtCargo" placeholder="Cargo" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="number" name="numDocumento" placeholder="N° Identificación" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" name="txtNombres" placeholder="Nombres" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="txtPrimerApellido" placeholder="Primer Apelllido" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="txtSegundoApellido" placeholder="Segundo Apellido" required>
                    </div>
                </div>
                <div class="col-6">
                    <select name="txtMunicipioResidencia" id="txtMunicipioResidencia" class="form-control" required>
                        <option value="0" >Municipio Residencia</option>
                            <?php
                                foreach($municipioResultadoTabla as $municipioResultado){
                                    $municipioResultadoId = $municipioResultado['municipioId'];
                                    $municipioResultadoNombre = $municipioResultado['municipioNombre'];

                                    echo "<option value='".$municipioResultadoId."'>".$municipioResultadoNombre."</option>";
                                }
                                
                            ?>        
                    </select>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <select name="txtMunicipioNacimiento" id="txtMunicipioNacimiento" class="form-control" required>
                            <option value="0" >Municipio Nacimiento </option>
                                <?php
                                    foreach($municipioResultadoTabla as $municipioResultado){
                                        $municipioResultadoId = $municipioResultado['municipioId'];
                                        $municipioResultadoNombre = $municipioResultado['municipioNombre'];

                                        echo "<option value='".$municipioResultadoId."'>".$municipioResultadoNombre."</option>";
                                    }
                                    
                                ?>        
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="number" name="txtTelefono" placeholder="Telefono" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="date" name="txtFechaNacimiento" placeholder="Fecha Nacimiento" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="email" name="txtEmail" placeholder="Email" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="txtEstudiosRealizados" id="txtEstudiosRealizados"  placeholder="Estudios Realizados" class="form-control experienciaAno" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="number" name="numbAnoExperiencia" placeholder="Años De Experiencia" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="txtExperiencia" id="txtExperiencia" placeholder="Experiencia Laboral" class="form-control experiencia" required></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                
                <button class="btn btn-info btn-block" type="submit">Registrarse</button>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->

    <!-- validacion bootstrap -->
    <script src="js/validacion/validacion.js"></script>


    <script src="assetsExte/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="assetsExte/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assetsExte/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    
</body>

</html>