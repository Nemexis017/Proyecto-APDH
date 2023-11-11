<?php 
    include('../conexion.php');
    $conexion= new conexion();
    
    $data_profesores= $_POST;

    $archivo_temporal = $_FILES['archivo']['tmp_name'];
    $archivo_nombre = $_FILES['archivo']['name'];
    $ruta_destino = "../../img/fotos_profesores/secundaria/".$archivo_nombre;

    if($archivo_nombre == null){
        $archivo_nombre = '';
    }else{
        move_uploaded_file($archivo_temporal, $ruta_destino);
        $ruta_destino = 'img/fotos_profesores/secundaria/'.$archivo_nombre;
    }
    
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
        ":sede_institucionalId" => $data_profesores['sede_institucionalId'],
        ":profesoresFotografia" => $ruta_destino,
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
                        `sede_institucionalId`,
                        `profesoresFotografia`
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
                            :sede_institucionalId,
                            :profesoresFotografia
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

