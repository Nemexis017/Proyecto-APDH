<?php 
    include('conexion.php');
    $conexion= new conexion();

    $values= array(
        ":tipoPersonaId"=> $_POST['selTipoPersona'],
        ":tipoDocuemtoId"=> $_POST['selTipoDocumento'],
        ":personalMauxiDocumento"=> $_POST['numDocumento'],
        ":personalMauxiCargo"=> $_POST['txtCargo'],
        ":personalMauxiNombres"=> $_POST['txtNombres'],
        ":personalMauxiPrimerApellido"=> $_POST['txtPrimerApellido'],
        ":personalMauxiSegundoApellido"=> $_POST['txtSegundoApellido'],
        ":personalMauxiMunicipioResidencia"=> $_POST['txtMunicipioResidencia'],
        ":personalMauxiMunicipioNacimiento"=> $_POST['txtMunicipioNacimiento'],
        ":personalMauxiTelefono"=> $_POST['txtTelefono'],
        ":personalMauxiFechaNacimiento"=> $_POST['txtFechaNacimiento'],
        ":personalMauxiEmail"=> $_POST['txtEmail'],
        ":personalMauxiExperiencia"=> $_POST['txtExperiencia'],
        ":personalMauxiAnosExperiencia"=> $_POST['numbAnoExperiencia'],
        ":personalMauxiEstudios"=> $_POST['txtEstudiosRealizados'],
        
    );
    
    $sqlInsertPersonal= "INSERT INTO `mauxi`.`personalmauxi`
    (
    `tipoPersonaId`,
    `tipoDocuemtoId`,
    `personalMauxiDocumento`,
    `personalMauxiCargo`,
    `personalMauxiNombres`,
    `personalMauxiPrimerApellido`,
    `personalMauxiSegundoApellido`,
    `personalMauxiMunicipioResidencia`,
    `personalMauxiMunicipioNacimiento`,
    `personalMauxiTelefono`,
    `personalMauxiFechaNacimiento`,
    `personalMauxiEmail`,
    `personalMauxiExperiencia`,
    `personalMauxiAnosExperiencia`,
    `personalMauxiEstudios`)
    VALUES
    (
        :tipoPersonaId,
        :tipoDocuemtoId,
        :personalMauxiDocumento,
        :personalMauxiCargo,
        :personalMauxiNombres,
        :personalMauxiPrimerApellido,
        :personalMauxiSegundoApellido,
        :personalMauxiMunicipioResidencia,
        :personalMauxiMunicipioNacimiento,
        :personalMauxiTelefono,
        :personalMauxiFechaNacimiento,
        :personalMauxiEmail,
        :personalMauxiExperiencia,
        :personalMauxiAnosExperiencia,
        :personalMauxiEstudios

    );"; 

    $conexion->ejecutar($sqlInsertPersonal,$values);

    $sqlConsultaId= "SELECT * FROM personalmauxi
    ORDER BY personalMauxiId DESC
    LIMIT 1";

    $personalId= $conexion->consulta($sqlConsultaId);

    foreach($personalId as $id){
        $personalArrId = $id['personalMauxiId'];
    };


    
    header("Location:../loginRegistro.php?id=".$personalArrId."");


?>



    