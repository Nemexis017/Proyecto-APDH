
<?php 
    include('../conexion.php'); 
    $conexion= new conexion(); 

    $sqlEstudiantesGeneral= "SELECT `estudiantes`.`estudiantesId`,
                            `estudiantes`.`tipoDocumentoId`,
                            tipoDocumentoNombre,
                            `estudiantes`.`tipoPersonaId`,
                            tipoPersonaNombre,
                            `estudiantes`.`estudiantesNumeroDocumento`,
                            `estudiantes`.`estudiantesNombres`,
                            `estudiantes`.`estudiantesPrimerApellido`,
                            `estudiantes`.`estudiantesSegundoApellido`,
                            `estudiantes`.`estudiantesMunicipioResidencia`,
                            MR.municipioNombre AS municipioResidencia,
                            `estudiantes`.`estudiantesMunicipoNacimiento`,
                            MN.municipioNombre AS municipioNacimiento,
                            `estudiantes`.`estudiantesTelefono`,
                            `estudiantes`.`estudiantesFechaNacimiento`,
                            `estudiantes`.`estudiantesEmail`,
                            `estudiantes`.`gobiernoEstudiantilId`,
                            gobiernoEstudiantilNombre
                        FROM `mauxi`.`estudiantes`
                        INNER JOIN tipopersona 
                            ON estudiantes.tipoPersonaId = tipopersona.tipoPersonaId 
                        INNER JOIN tipodocumento 
                            ON estudiantes.tipoDocumentoId = tipodocumento.tipoDocumentoId
                        INNER JOIN municipio MR
                            ON estudiantesMunicipioResidencia = MR.municipioId 
                        INNER JOIN municipio MN 
                            ON estudiantesMunicipoNacimiento = MN.municipioId
                        INNER JOIN gobiernoEstudiantil
                            ON estudiantes.gobiernoEstudiantilId = gobiernoestudiantil.gobiernoEstudiantilId";

    $resultadoEstudiantes= $conexion->consulta($sqlEstudiantesGeneral);

    foreach($resultadoEstudiantes as $filaEstudiantes){
        $jsonEstudiantes[]=[
            "estudiantesId" => $filaEstudiantes['estudiantesId'],
            "tipoDocumentoId" => $filaEstudiantes['tipoDocumentoId'],
            "tipoDocumentoNombre" => $filaEstudiantes['tipoDocumentoNombre'],
            "tipoPersonaId" => $filaEstudiantes['tipoPersonaId'],
            "tipoPersonaNombre" => $filaEstudiantes['tipoPersonaNombre'],
            "estudiantesNumeroDocumento" => $filaEstudiantes['estudiantesNumeroDocumento'],
            "estudiantesNombres" => $filaEstudiantes['estudiantesNombres'],
            "estudiantesPrimerApellido" => $filaEstudiantes['estudiantesPrimerApellido'],
            "estudiantesSegundoApellido" => $filaEstudiantes['estudiantesSegundoApellido'],
            "estudiantesMunicipioResidencia" => $filaEstudiantes['estudiantesMunicipioResidencia'],
            "municipioResidencia" => $filaEstudiantes['municipioResidencia'],
            "estudiantesMunicipoNacimiento" => $filaEstudiantes['estudiantesMunicipoNacimiento'],
            "municipioNacimiento" => $filaEstudiantes['municipioNacimiento'],
            "estudiantesTelefono" => $filaEstudiantes['estudiantesTelefono'],
            "estudiantesFechaNacimiento" => $filaEstudiantes['estudiantesFechaNacimiento'],
            "estudiantesEmail" => $filaEstudiantes['estudiantesEmail'],
            "gobiernoEstudiantilId" => $filaEstudiantes['gobiernoEstudiantilId'],
            "gobiernoEstudiantilNombre" => $filaEstudiantes['gobiernoEstudiantilNombre'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonEstudiantes);

?>