<?php 
    include('../conexion.php'); 
    $conexion= new conexion(); 

    $consulta_directivos= "SELECT `personalmauxi`.`personalMauxiId`,
                            `personalmauxi`.`tipoPersonaId`,
                            tipoPersonaNombre,
                            `personalmauxi`.`tipoDocumentoId`,
                            tipoDocumentoSigla,
                            `personalmauxi`.`personalMauxiDocumento`,
                            `personalmauxi`.`personalMauxiCargo`,
                            `personalmauxi`.`personalMauxiNombres`,
                            `personalmauxi`.`personalMauxiPrimerApellido`,
                            `personalmauxi`.`personalMauxiSegundoApellido`,
                            `personalmauxi`.`personalMauxiMunicipioResidencia`,
                            MR.municipioNombre as MunResidencia ,
                            `personalmauxi`.`personalMauxiMunicipioNacimiento`,
                            MN.municipioNombre as MunNacimiento,
                            `personalmauxi`.`personalMauxiTelefono`,
                            `personalmauxi`.`personalMauxiFechaNacimiento`,
                            `personalmauxi`.`personalMauxiEmail`,
                            `personalmauxi`.`personalMauxiExperiencia`,
                            `personalmauxi`.`personalMauxiAnosExperiencia`,
                            `personalmauxi`.`personalMauxiEstudios`
                        FROM `mauxi`.`personalmauxi`
                        INNER JOIN tipopersona 
                            ON personalmauxi.tipoPersonaId = tipopersona.tipoPersonaId 
                        INNER JOIN tipodocumento 
                            ON personalmauxi.tipoDocumentoId = tipodocumento.tipoDocumentoId 
                        INNER JOIN municipio MR
                            ON personalMauxiMunicipioResidencia = MR.municipioId 
                        INNER JOIN municipio MN 
                            ON personalMauxiMunicipioNacimiento = MN.municipioId
                        WHERE tipoPersonaNombre= 'directivo' ";

    $resultado_directivos= $conexion->consulta($consulta_directivos);

    foreach($resultado_directivos as $resultadoDirectivos){
        $jsonDirectivos[]=[
            "personalMauxiId" => $resultadoDirectivos['personalMauxiId'],
            "tipoPersonaId" => $resultadoDirectivos['tipoPersonaId'],
            "tipoPersonaNombre" => $resultadoDirectivos['tipoPersonaNombre'],
            "tipoDocuemtoId" => $resultadoDirectivos['tipoDocumentoId'],
            "tipoDocumentoSigla" => $resultadoDirectivos['tipoDocumentoSigla'],
            "personalMauxiDocumento" => $resultadoDirectivos['personalMauxiDocumento'],
            "personalMauxiCargo" => $resultadoDirectivos['personalMauxiCargo'],
            "personalMauxiNombres" => $resultadoDirectivos['personalMauxiNombres'],
            "personalMauxiPrimerApellido" => $resultadoDirectivos['personalMauxiPrimerApellido'],
            "personalMauxiSegundoApellido" => $resultadoDirectivos['personalMauxiSegundoApellido'],
            "personalMauxiMunicipioResidencia" => $resultadoDirectivos['personalMauxiMunicipioResidencia'],
            "municipioResidencia" => $resultadoDirectivos['MunResidencia'],
            "personalMauxiMunicipioNacimiento" => $resultadoDirectivos['personalMauxiMunicipioNacimiento'],
            "municipioNacimiento" => $resultadoDirectivos['MunNacimiento'],
            "personalMauxiTelefono" => $resultadoDirectivos['personalMauxiTelefono'],
            "personalMauxiFechaNacimiento" => $resultadoDirectivos['personalMauxiFechaNacimiento'],
            "personalMauxiEmail" => $resultadoDirectivos['personalMauxiEmail'],
            "personalMauxiExperiencia" => $resultadoDirectivos['personalMauxiExperiencia'],
            "personalMauxiAnosExperiencia" => $resultadoDirectivos['personalMauxiAnosExperiencia'],
            "personalMauxiEstudios" => $resultadoDirectivos['personalMauxiEstudios'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonDirectivos);

?>