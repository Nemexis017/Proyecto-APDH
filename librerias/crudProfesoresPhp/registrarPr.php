<?php 
    include('../conexion.php');
    $conexion= new conexion();
    
    $data_profesores= json_decode(file_get_contents('php://input'), true);
    
    $values_profesores= array(
        ":tipoDocumentoId" => $data_profesores['prtipoDocumentoId'],
        ":tipoPersonaId" => $data_profesores['prtipoPersonaId'],
        ":profesoresDocumento" => $data_profesores['profesoresDocumento'],
        ":profesoresNombres" => $data_profesores['profesoresNombres'],
        ":profesoresPrimerApellido" => $data_profesores['profesoresPrimerApellido'],
        ":profesoresSegundoApellido" => $data_profesores['profesoresSegundoApellido'],
        ":profesoresMunicipioResidencia" => $data_profesores['profesoresMunicipioResidencia'],
        ":profesoresMunicipioNacimiento" => $data_profesores['profesoresMunicipioNacimiento'],
        ":profesoresTelefono" => $data_profesores['profesoresTelefono'],
        ":profesoresFechaNacimiento" => $data_profesores['profesoresFechaNacimiento'],
        ":profesoresEmail" => $data_profesores['profesoresEmail'],
        ":profesoresMateria" => $data_profesores['profesoresMateria'],
        ":profesoresExperiencia" => $data_profesores['profesoresExperiencia'],
        ":profesoresAnoExperiencia" => $data_profesores['profesoresAnoExperiencia'],
        ":profesoresTitulos" => $data_profesores['profesoresTitulos'],
        ":gobiernoEstudiantilId" => $data_profesores['gobiernoEstudiantilId'],
        ":sede_institucionalId" => $data_profesores['sede_institucionalId']
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

    if(empty(array_filter($values_profesores))){
        $sqlInsertProfesor= "";
    }else{
        $sqlInsertProfesor=$conexion->ejecutar($sqlInsertProfesor,$values_profesores);
    }

    
    if($sqlInsertProfesor == 1){
        $response = ["registoProfesores"=> "OK"];
    }else{
        $response = ["registoProfesores"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
?>

