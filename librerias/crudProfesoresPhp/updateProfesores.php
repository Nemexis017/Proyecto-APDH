<?php
    include('../conexion.php');
    $conexion= new conexion();

    $data_idProfesores = json_decode(file_get_contents('php://input'), true);

    $values_updateTeacher= array(
        ":profesoresId" => $data_idProfesores['profesoresId'],
        ":tipoDocumentoId" => $data_idProfesores['tipoDocumentoId'],
        ":tipoPersonaId" => $data_idProfesores['tipoPersonaId'],
        ":profesoresDocumento" => $data_idProfesores['profesoresDocumento'],
        ":profesoresNombres" => $data_idProfesores['profesoresNombres'],
        ":profesoresPrimerApellido" => $data_idProfesores['profesoresPrimerApellido'],
        ":profesoresSegundoApellido" => $data_idProfesores['profesoresSegundoApellido'],
        ":profesoresMunicipioResidencia" => $data_idProfesores['profesoresMunicipioResidencia'],
        ":profesoresMunicipioNacimiento" => $data_idProfesores['profesoresMunicipioNacimiento'],
        ":profesoresTelefono" => $data_idProfesores['profesoresTelefono'],
        ":profesoresFechaNacimiento" => $data_idProfesores['profesoresFechaNacimiento'],
        ":profesoresEmail" => $data_idProfesores['profesoresEmail'],
        ":profesoresMateria" => $data_idProfesores['profesoresMateria'],
        ":profesoresExperiencia" => $data_idProfesores['profesoresExperiencia'],
        ":profesoresAnoExperiencia" => $data_idProfesores['profesoresAnoExperiencia'],
        ":profesoresTitulos" => $data_idProfesores['profesoresTitulos'],
        ":gobiernoEstudiantilId" => $data_idProfesores['gobiernoEstudiantilId'],
        ":sede_institucionalId" => $data_idProfesores['sede_institucionalId'],
        ":profesoresFotografia" => $data_idProfesores['profesoresFotografia']
    );


    $sqlTeacher_update= "UPDATE `mauxi`.`profesores`
                        SET
                        `tipoDocumentoId` = :tipoDocumentoId,
                        `tipoPersonaId` = :tipoPersonaId,
                        `profesoresDocumento` = :profesoresDocumento,
                        `profesoresNombres` = :profesoresNombres,
                        `profesoresPrimerApellido` =:profesoresPrimerApellido,
                        `profesoresSegundoApellido` = :profesoresSegundoApellido,
                        `profesoresMunicipioResidencia` = :profesoresMunicipioResidencia,
                        `profesoresMunicipioNacimiento` = :profesoresMunicipioNacimiento,
                        `profesoresTelefono` = :profesoresTelefono,
                        `profesoresFechaNacimiento` = :profesoresFechaNacimiento,
                        `profesoresEmail` =:profesoresEmail,
                        `profesoresMateria` = :profesoresMateria,
                        `profesoresExperiencia` =:profesoresExperiencia,
                        `profesoresAnoExperiencia` = :profesoresAnoExperiencia,
                        `profesoresTitulos` = :profesoresTitulos,
                        `gobiernoEstudiantilId` = :gobiernoEstudiantilId,
                        `sede_institucionalId` = :sede_institucionalId,
                        `profesoresFotografia` = :profesoresFotografia
                        WHERE `profesoresId` = :profesoresId"; 

    // condicion de si el array esta null
    if(empty(array_filter($values_updateTeacher))){
        $ejecutarUpdate_teacher= "";
    }else{
        $ejecutarUpdate_teacher= $conexion->ejecutar($sqlTeacher_update, $values_updateTeacher);
    }

    // respuesta para ejecutar funciones en las promesas
    if($ejecutarUpdate_teacher == 1){
        $response_update = ["update_completado"=> "OK"];
    }else{
        $response_update = ["update_completado"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response_update)

?>