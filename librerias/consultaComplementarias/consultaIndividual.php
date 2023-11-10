<?php
    include('../conexion.php');
    $conexion= new conexion();
    
    $id_verifi_profesores = json_decode(file_get_contents('php://input'), true);

    $value_Id_verifiPr= array(
        ":id_verificacion" => $id_verifi_profesores['consultaProfesor']
    );
    
    $sqlProfesoresIndividual= "SELECT `profesores`.`profesoresId`,
                            `profesores`.`tipoDocumentoId`,
                            tipoDocumentoNombre,
                            `profesores`.`tipoPersonaId`,
                            tipoPersonaNombre,
                            `profesores`.`profesoresDocumento`,
                            `profesores`.`profesoresNombres`,
                            `profesores`.`profesoresPrimerApellido`,
                            `profesores`.`profesoresSegundoApellido`,
                            `profesores`.`profesoresMunicipioResidencia`,
                            MR.municipioNombre AS municipioNR,
                            `profesores`.`profesoresMunicipioNacimiento`,
                            MN.municipioNombre AS municipioMN,
                            `profesores`.`profesoresTelefono`,
                            `profesores`.`profesoresFechaNacimiento`,
                            `profesores`.`profesoresEmail`,
                            `profesores`.`profesoresMateria`,
                            `profesores`.`profesoresExperiencia`,
                            `profesores`.`profesoresAnoExperiencia`,
                            `profesores`.`profesoresTitulos`,
                            `profesores`.`gobiernoEstudiantilId`,
                            gobiernoEstudiantilNombre,
                            `profesores`.`sede_institucionalId`,
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
                            ON profesores.gobiernoEstudiantilId= gobiernoestudiantil.gobiernoEstudiantilId
                        INNER JOIN sede_institucional
                            ON profesores.sede_institucionalId= sede_institucional.sede_institucionalId
                        WHERE profesoresId = :id_verificacion";

    
    $consulta_verificacion= $conexion->consultaValor($sqlProfesoresIndividual,$value_Id_verifiPr);
    
    foreach($consulta_verificacion as $filaIndProfesores){
        $jsonCosultaIdTeacher[]=[
            "profesoresId" => $filaIndProfesores['profesoresId'],
            "tipoDocumentoId" => $filaIndProfesores['tipoDocumentoId'],
            "tipoDocumentoNombre" => $filaIndProfesores['tipoDocumentoNombre'],
            "tipoPersonaId" => $filaIndProfesores['tipoPersonaId'],
            "tipoPersonaNombre" => $filaIndProfesores['tipoPersonaNombre'],
            "profesoresDocumento" => $filaIndProfesores['profesoresDocumento'],
            "profesoresNombres" => $filaIndProfesores['profesoresNombres'],
            "profesoresPrimerApellido" => $filaIndProfesores['profesoresPrimerApellido'],
            "profesoresSegundoApellido" => $filaIndProfesores['profesoresSegundoApellido'],
            "profesoresMunicipioResidencia" => $filaIndProfesores['profesoresMunicipioResidencia'],
            "municipioNR" => $filaIndProfesores['municipioNR'],
            "profesoresMunicipioNacimiento" => $filaIndProfesores['profesoresMunicipioNacimiento'],
            "municipioMN" => $filaIndProfesores['municipioMN'],
            "profesoresTelefono" => $filaIndProfesores['profesoresTelefono'],
            "profesoresFechaNacimiento" => $filaIndProfesores['profesoresFechaNacimiento'],
            "profesoresEmail" => $filaIndProfesores['profesoresEmail'],
            "profesoresMateria" => $filaIndProfesores['profesoresMateria'],
            "profesoresExperiencia" => $filaIndProfesores['profesoresExperiencia'],
            "profesoresAnoExperiencia" => $filaIndProfesores['profesoresAnoExperiencia'],
            "profesoresTitulos" => $filaIndProfesores['profesoresTitulos'],
            "gobiernoEstudiantilId" => $filaIndProfesores['gobiernoEstudiantilId'],
            "gobiernoEstudiantilNombre" => $filaIndProfesores['gobiernoEstudiantilNombre'],
            "sede_institucionalId" => $filaIndProfesores['sede_institucionalId'],
            "sede_institucionalNombre" => $filaIndProfesores['sede_institucionalNombre']
        ];
    }

    header('Content-type:application/json');
    echo json_encode($jsonCosultaIdTeacher);

?>