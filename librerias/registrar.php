<?php 
    include('conexion.php');
    $conexion= new conexion();
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    $values= array(
        ":tipoPersonaId"=> $data['tipoPersonaId'],
        ":tipoDocuemtoId"=> $data['tipoDocumentoId'],
        ":personalMauxiDocumento"=> $data['personalMauxiDocumento'],
        ":personalMauxiCargo"=> $data['personalMauxiCargo'],
        ":personalMauxiNombres"=> $data['personalMauxiNombres'],
        ":personalMauxiPrimerApellido"=> $data['personalMauxiPrimerApellido'],
        ":personalMauxiSegundoApellido"=> $data['personalMauxiSegundoApellido'],
        ":personalMauxiMunicipioResidencia"=> $data['personalMauxiMunicipioResidencia'],
        ":personalMauxiMunicipioNacimiento"=> $data['personalMauxiMunicipioNacimiento'],
        ":personalMauxiTelefono"=> $data['personalMauxiTelefono'],
        ":personalMauxiFechaNacimiento"=> $data['personalMauxiFechaNacimiento'],
        ":personalMauxiEmail"=> $data['personalMauxiEmail'],
        ":personalMauxiExperiencia"=> $data['personalMauxiExperiencia'],
        ":personalMauxiAnosExperiencia"=> $data['personalMauxiAnosExperiencia'],
        ":personalMauxiEstudios"=> $data['personalMauxiEstudios'],
    );

    $sqlInsertPersonal= "INSERT INTO `mauxi`.`personalmauxi`
    (
    `tipoPersonaId`,
    `tipoDocumentoId`,
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

    if(empty(array_filter($values))){
        $registrarPersonal= "";
    }else{
        $registrarPersonal=$conexion->ejecutar($sqlInsertPersonal,$values);
    }

    
    if($registrarPersonal == 1){
        $response = ["registroEjecutado"=> "OK"];
    }else{
        $response = ["registroEjecutado"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
?>



    