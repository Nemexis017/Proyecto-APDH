<?php 
    include('../conexion.php');
    $conexion= new conexion();
    
    $data_estudiantes= json_decode(file_get_contents('php://input'), true);
    
    $values_estudiantes = array(
        ":estudiantesId" => $data_estudiantes[''],
        ":tipoDocumentoId" => $data_estudiantes[''],
        ":tipoPersonaId" => $data_estudiantes[''],
        ":estudiantesNumeroDocumento" => $data_estudiantes[''],
        ":estudiantesNombres" => $data_estudiantes[''],
        ":estudiantesPrimerApellido" => $data_estudiantes[''],
        ":estudiantesSegundoApellido" => $data_estudiantes[''],
        ":estudiantesMunicipioResidencia" => $data_estudiantes[''],
        ":estudiantesMunicipoNacimiento" => $data_estudiantes[''],
        ":estudiantesTelefono" => $data_estudiantes[''],
        ":estudiantesFechaNacimiento" => $data_estudiantes[''],
        ":estudiantesEmail" => $data_estudiantes[''],
        ":gobiernoEstudiantilId" => $data_estudiantes[''],
    );

    $sqlInsertEstudiantes= "INSERT INTO `mauxi`.`estudiantes`
                        (
                            `estudiantesId`,
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
                            :estudiantesId
                            :tipoDocumentoId
                            :tipoPersonaId
                            :estudiantesNumeroDocumento
                            :estudiantesNombres
                            :estudiantesPrimerApellido
                            :estudiantesSegundoApellido
                            :estudiantesMunicipioResidencia
                            :estudiantesMunicipoNacimiento
                            :estudiantesTelefono
                            :estudiantesFechaNacimiento
                            :estudiantesEmail
                            :gobiernoEstudiantilId
                        )"; 

    if(empty(array_filter($values_profesores))){
        $resgistroEstudiante= "";
    }else{
        $resgistroEstudiante= $conexion->ejecutar($sqlInsertEstudiantes,$values_estudiantes);
    }

    
    if($sqlInsertProfesor == 1){
        $response = ["registoProfesores"=> "OK"];
    }else{
        $response = ["registoProfesores"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
?>