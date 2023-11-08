<?php 
    include('conexion.php');
    $conexion= new conexion();
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    $values_profesores= array(
        ":tipoDocumentoId" => $data_profesores[''],
        ":tipoPersonaId" => $data_profesores[''],
        ":profesoresDocumento" => $data_profesores[''],
        ":profesoresNombres" => $data_profesores[''],
        ":profesoresPrimerApellido" => $data_profesores[''],
        ":profesoresSegundoApellido" => $data_profesores[''],
        ":profesoresMunicipioResidencia" => $data_profesores[''],
        ":profesoresMunicipioNacimiento" => $data_profesores[''],
        ":profesoresTelefono" => $data_profesores[''],
        ":profesoresFechaNacimiento" => $data_profesores[''],
        ":profesoresEmail" => $data_profesores[''],
        ":profesoresMateria" => $data_profesores[''],
        ":profesoresExperiencia" => $data_profesores[''],
        ":profesoresAnoExperiencia" => $data_profesores[''],
        ":profesoresTitulos" => $data_profesores[''],
        ":gobiernoEstudiantilId" => $data_profesores[''],
        ":sede_institucionalId" => $data_profesores['']
    );

                        

    $sqlInsertProfesor= "INSERT INTO `mauxi`.`profesores`
                        (
                        `tipoDocumentoId`,
                        `tipoPersonaId`,
                        `profesoresDocumento`,
                        `profesoresNombres`,
                        `profesoresPrimerApellido`,
                        `profesoresSegundoApellido`,
                        `profesoresMunicipioResidencia`,
                        `profesoresMunicipioNacimiento`,
                        `profesoresTelefono`,
                        `profesoresFechaNacimiento`,
                        `profesoresEmail`,
                        `profesoresMateria`,
                        `profesoresExperiencia`,
                        `profesoresAnoExperiencia`,
                        `profesoresTitulos`,
                        `gobiernoEstudiantilId`,
                        `sede_institucionalId`
                        )
                        VALUES
                        (
                            :tipoDocumentoId,
                            :tipoPersonaId,
                            :profesoresDocumento,
                            :profesoresNombres,
                            :profesoresPrimerApellido,
                            :profesoresSegundoApellido,
                            :profesoresMunicipioResidencia,
                            :profesoresMunicipioNacimiento,
                            :profesoresTelefono,
                            :profesoresFechaNacimiento,
                            :profesoresEmail,
                            :profesoresMateria,
                            :profesoresExperiencia,
                            :profesoresAnoExperiencia,
                            :profesoresTitulos,
                            :gobiernoEstudiantilId,
                            :sede_institucionalId
                        );"; 

    if(empty(array_filter($values))){
        $registrarProfosores= "";
    }else{
        $registrarProfosores=$conexion->ejecutar($sqlInsertProfesor,$values_profesores);
    }

    
    if($registrarProfosores == 1){
        $responsePr = ["registroEjecutadoPr"=> "OK"];
    }else{
        $responsePr = ["registroEjecutadoPr"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
?>