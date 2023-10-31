<?php
    include('conexion.php');
    $conexion= new conexion();

    $data_id = json_decode(file_get_contents('php://input'), true);

    $values_update= array(
        ":idPersonalMauxi"=> $data_id['id_personalMauxi'],
        ":tipoPersonaId"=> $data_id['tipoPersonaId'],
        ":tipoDocumentoId"=> $data_id['tipoDocumentoId'],
        ":personalMauxiDocumento"=> $data_id['personalMauxiDocumento'],
        ":personalMauxiCargo"=> $data_id['personalMauxiCargo'],
        ":personalMauxiNombres"=> $data_id['personalMauxiNombres'],
        ":personalMauxiPrimerApellido"=> $data_id['personalMauxiPrimerApellido'],
        ":personalMauxiSegundoApellido"=> $data_id['personalMauxiSegundoApellido'],
        ":personalMauxiMunicipioResidencia"=> $data_id['personalMauxiMunicipioResidencia'],
        ":personalMauxiMunicipioNacimiento"=> $data_id['personalMauxiMunicipioNacimiento'],
        ":personalMauxiTelefono"=> $data_id['personalMauxiTelefono'],
        ":personalMauxiFechaNacimiento"=> $data_id['personalMauxiFechaNacimiento'],
        ":personalMauxiEmail"=> $data_id['personalMauxiEmail'],
        ":personalMauxiExperiencia"=> $data_id['personalMauxiExperiencia'],
        ":personalMauxiAnosExperiencia"=> $data_id['personalMauxiAnosExperiencia'],
        ":personalMauxiEstudios"=> $data_id['personalMauxiEstudios'],
    );

    $sql_update= "UPDATE `mauxi`.`personalmauxi`
                SET
                `tipoPersonaId` = :tipoPersonaId,
                `tipoDocumentoId` = :tipoDocumentoId,
                `personalMauxiDocumento` = :personalMauxiDocumento,
                `personalMauxiCargo` = :personalMauxiCargo,
                `personalMauxiNombres` = :personalMauxiNombres,
                `personalMauxiPrimerApellido` = :personalMauxiPrimerApellido,
                `personalMauxiSegundoApellido` = :personalMauxiSegundoApellido,
                `personalMauxiMunicipioResidencia` = :personalMauxiMunicipioResidencia,
                `personalMauxiMunicipioNacimiento` =:personalMauxiMunicipioNacimiento,
                `personalMauxiTelefono` = :personalMauxiTelefono,
                `personalMauxiFechaNacimiento` =:personalMauxiFechaNacimiento,
                `personalMauxiEmail` = :personalMauxiEmail,
                `personalMauxiExperiencia` = :personalMauxiExperiencia,
                `personalMauxiAnosExperiencia` = :personalMauxiAnosExperiencia,
                `personalMauxiEstudios` = :personalMauxiEstudios
                WHERE `personalMauxiId` = :idPersonalMauxi"; 

    // condicion de si el array esta null
    if(empty(array_filter($values_update))){
        $ejecute_update= "";
    }else{
        $ejecute_update= $conexion->ejecutar($sql_update, $values_update);
    }

    // respuesta para ejecutar funciones en las promesas
    if($ejecute_update == 1){
        $response_update = ["update_completado"=> "OK"];
    }else{
        $response_update = ["update_completado"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response_update)

?>