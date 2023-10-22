<?php
    include('conexion.php');
    $conexion= new conexion();

    $data_id = json_decode(file_get_contents('php://input'), true);

    $values_updatw= array(
        ":idPersonalMauxi"=> $data_id[''],
        ":tipoPersonaId"=> $data_id[''],
        ":tipoDocumentoId"=> $data_id[''],
        ":personalMauxiDocumento"=> $data_id[''],
        ":personalMauxiCargo"=> $data_id[''],
        ":personalMauxiNombres"=> $data_id[''],
        ":personalMauxiPrimerApellido"=> $data_id[''],
        ":personalMauxiSegundoApellido"=> $data_id[''],
        ":personalMauxiMunicipioResidencia"=> $data_id[''],
        ":personalMauxiMunicipioNacimiento"=> $data_id[''],
        ":personalMauxiTelefono"=> $data_id[''],
        ":personalMauxiFechaNacimiento"=> $data_id[''],
        ":personalMauxiEmail"=> $data_id[''],
        ":personalMauxiExperiencia"=> $data_id[''],
        ":personalMauxiAnosExperiencia"=> $data_id[''],
        ":personalMauxiEstudios"=> $data_id[''],
    );

    $sql_udate= "UPDATE `mauxi`.`personalmauxi`
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

    $ejecute_update= $conexion->ejecutar($sql_udate, $values_updatw);

    


?>