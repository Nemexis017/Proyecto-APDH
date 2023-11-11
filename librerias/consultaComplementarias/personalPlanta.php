<?php 
    include('../conexion.php'); 
    $conexion= new conexion(); 

    $personalPlanta= "SELECT `personalmauxi`.`personalMauxiId`,
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
                        WHERE tipoPersonaNombre= 'personal de planta' ";

    $resultado_planta= $conexion->consulta($personalPlanta);

    foreach($resultado_planta as $resultadoPlata){
        $jsonPlanta[]=[
            "personalMauxiId" => $resultadoPlata['personalMauxiId'],
            "tipoPersonaId" => $resultadoPlata['tipoPersonaId'],
            "tipoPersonaNombre" => $resultadoPlata['tipoPersonaNombre'],
            "tipoDocuemtoId" => $resultadoPlata['tipoDocumentoId'],
            "tipoDocumentoSigla" => $resultadoPlata['tipoDocumentoSigla'],
            "personalMauxiDocumento" => $resultadoPlata['personalMauxiDocumento'],
            "personalMauxiCargo" => $resultadoPlata['personalMauxiCargo'],
            "personalMauxiNombres" => $resultadoPlata['personalMauxiNombres'],
            "personalMauxiPrimerApellido" => $resultadoPlata['personalMauxiPrimerApellido'],
            "personalMauxiSegundoApellido" => $resultadoPlata['personalMauxiSegundoApellido'],
            "personalMauxiMunicipioResidencia" => $resultadoPlata['personalMauxiMunicipioResidencia'],
            "municipioResidencia" => $resultadoPlata['MunResidencia'],
            "personalMauxiMunicipioNacimiento" => $resultadoPlata['personalMauxiMunicipioNacimiento'],
            "municipioNacimiento" => $resultadoPlata['MunNacimiento'],
            "personalMauxiTelefono" => $resultadoPlata['personalMauxiTelefono'],
            "personalMauxiFechaNacimiento" => $resultadoPlata['personalMauxiFechaNacimiento'],
            "personalMauxiEmail" => $resultadoPlata['personalMauxiEmail'],
            "personalMauxiExperiencia" => $resultadoPlata['personalMauxiExperiencia'],
            "personalMauxiAnosExperiencia" => $resultadoPlata['personalMauxiAnosExperiencia'],
            "personalMauxiEstudios" => $resultadoPlata['personalMauxiEstudios'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonPlanta);