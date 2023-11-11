<?php 
    include('../conexion.php');
    $conexion= new conexion();
    
    $data_estudiantes= json_decode(file_get_contents('php://input'), true);
    
    $values_estudiantes = array(
        ":tipoDocumentoId" => $data_estudiantes['tipoDocumentoId'],
        ":tipoPersonaId" => $data_estudiantes['tipoPersonaId'],
        ":estudiantesNumeroDocumento" => $data_estudiantes['estudiantesNumeroDocumento'],
        ":estudiantesNombres" => $data_estudiantes['estudiantesNombres'],
        ":estudiantesPrimerApellido" => $data_estudiantes['estudiantesPrimerApellido'],
        ":estudiantesSegundoApellido" => $data_estudiantes['estudiantesSegundoApellido'],
        ":estudiantesMunicipioResidencia" => $data_estudiantes['estudiantesMunicipioResidencia'],
        ":estudiantesMunicipoNacimiento" => $data_estudiantes['estudiantesMunicipoNacimiento'],
        ":estudiantesTelefono" => $data_estudiantes['estudiantesTelefono'],
        ":estudiantesFechaNacimiento" => $data_estudiantes['estudiantesFechaNacimiento'],
        ":estudiantesEmail" => $data_estudiantes['estudiantesEmail'],
        ":gobiernoEstudiantilId" => $data_estudiantes['gobiernoEstudiantilId'],
    );

    $sqlInsertEstudiantes= "INSERT INTO `mauxi`.`estudiantes`
                        (
                            `tipoDocumentoId`,
                            `tipoPersonaId`,
                            `estudiantesNumeroDocumento`,
                            `estudiantesNombres`,
                            `estudiantesPrimerApellido`,
                            `estudiantesSegundoApellido`,
                            `estudiantesMunicipioResidencia`,
                            `estudiantesMunicipoNacimiento`,
                            `estudiantesTelefono`,
                            `estudiantesFechaNacimiento`,
                            `estudiantesEmail`,
                            `gobiernoEstudiantilId`
                        )
                        VALUES
                        (
                            :tipoDocumentoId,
                            :tipoPersonaId,
                            :estudiantesNumeroDocumento,
                            :estudiantesNombres,
                            :estudiantesPrimerApellido,
                            :estudiantesSegundoApellido,
                            :estudiantesMunicipioResidencia,
                            :estudiantesMunicipoNacimiento,
                            :estudiantesTelefono,
                            :estudiantesFechaNacimiento,
                            :estudiantesEmail,
                            :gobiernoEstudiantilId
                        )"; 

    if(empty(array_filter($values_estudiantes))){
        $resgistroEstudiante= "";
    }else{
        $resgistroEstudiante= $conexion->ejecutar($sqlInsertEstudiantes,$values_estudiantes);
    }

    
    if($resgistroEstudiante == 1){
        $response = ["registroEstudiantes"=> "OK"];
    }else{
        $response = ["registroEstudiantes"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
?>