<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $sql_consulta_profesores= "SELECT `profesores`.`profesoresId`,
                            `profesores`.`tipoDocumentoId`,
                            tipoDocumentoSigla,
                            `profesores`.`tipoPersonaId`,
                            tipoPersonaNombre,
                            `profesores`.`profesoresDocumento`,
                            `profesores`.`profesoresNombres`,
                            `profesores`.`profesoresPrimerApellido`,
                            `profesores`.`profesoresSegundoApellido`,
                            `profesores`.`profesoresMunicipioResidencia`,
                            MR.municipioNombre as MunResidencia ,
                            `profesores`.`profesoresMunicipioNacimiento`,
                            MN.municipioNombre as MunNacimiento,
                            `profesores`.`profesoresTelefono`,
                            `profesores`.`profesoresFechaNacimiento`,
                            `profesores`.`profesoresEmail`,
                            `profesores`.`profesoresMateria`,
                            `profesores`.`profesoresExperiencia`,
                            `profesores`.`profesoresAnoExperiencia`,
                            `profesores`.`profesoresTitulos`,
                            `profesores`.`gobiernoEstudiantilId`,
                            gobiernoEstudiantilNombre,
                            sede_institucionalNombre
                        FROM `mauxi`.`profesores`
                        INNER JOIN tipopersona
                        ON profesores.tipoPersonaId = tipopersona.tipoPersonaId
                        INNER JOIN tipodocumento
                        ON profesores.tipoDocumentoId = tipodocumento.tipoDocumentoId
                        INNER JOIN municipio MR
                        ON profesoresMunicipioResidencia = MR.municipioId
                        INNER JOIN municipio MN 
                        ON profesoresMunicipioNacimiento = MN.municipioId
                        INNER JOIN gobiernoestudiantil
                        ON profesores.gobiernoEstudiantilId = gobiernoestudiantil.gobiernoEstudiantilId
                        INNER JOIN sede_institucional
                        ON profesores.sede_institucionalId = sede_institucional.sede_institucionalId";

    $resultado_profesores= $conexion->consulta($sql_consulta_profesores);

    foreach($resultado_profesores as $filaResultado){
        $jsonProfesores[]=[
            "profesoresId" => $filaResultado['profesoresId'],
            "tipoDocumentoId" => $filaResultado['tipoDocumentoId'],
            "tipoDocumentoSigla" => $filaResultado['tipoDocumentoSigla'],
            "tipoPersonaId" => $filaResultado['tipoPersonaId'],
            "tipoPersonaNombre" => $filaResultado['tipoPersonaNombre'],
            "profesoresDocumento" => $filaResultado['profesoresDocumento'],
            "profesoresNombres" => $filaResultado['profesoresNombres'],
            "profesoresPrimerApellido" => $filaResultado['profesoresPrimerApellido'],
            "profesoresSegundoApellido" => $filaResultado['profesoresSegundoApellido'],
            "profesoresMunicipioResidencia" => $filaResultado['profesoresMunicipioResidencia'],
            "nombreMunicipioResidencia" => $filaResultado['MunResidencia'],
            "profesoresMunicipioNacimiento" => $filaResultado['profesoresMunicipioNacimiento'],
            "nombreMunicipioNacimiento" => $filaResultado['MunNacimiento'],
            "profesoresTelefono" => $filaResultado['profesoresTelefono'],
            "profesoresFechaNacimiento" => $filaResultado['profesoresFechaNacimiento'],
            "profesoresEmail" => $filaResultado['profesoresEmail'],
            "profesoresMateria" => $filaResultado['profesoresMateria'],
            "profesoresExperiencia" => $filaResultado['profesoresExperiencia'],
            "profesoresAnoExperiencia" => $filaResultado['profesoresAnoExperiencia'],
            "profesoresTitulos" => $filaResultado['profesoresTitulos'],
            "gobiernoEstudiantilId" => $filaResultado['gobiernoEstudiantilId'],
            "gobiernoEstudiantilNombre" => $filaResultado['gobiernoEstudiantilNombre'],
            "sede_institucionalNombre" => $filaResultado['sede_institucionalNombre'],
    
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonProfesores);

?>