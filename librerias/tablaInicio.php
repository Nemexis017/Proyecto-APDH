<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $sqlConsultaGeneral= "SELECT `personalmauxi`.`personalMauxiId`,
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
                                ON personalMauxiMunicipioNacimiento = MN.municipioId";

    $resultadoPersonal= $conexion->consulta($sqlConsultaGeneral);

    foreach($resultadoPersonal as $filaResultado){
        $jsonPersonal[]=[
            "personalMauxiId" => $filaResultado['personalMauxiId'],
            "tipoPersonaId" => $filaResultado['tipoPersonaId'],
            "tipoPersonaNombre" => $filaResultado['tipoPersonaNombre'],
            "tipoDocuemtoId" => $filaResultado['tipoDocumentoId'],
            "tipoDocumentoSigla" => $filaResultado['tipoDocumentoSigla'],
            "personalMauxiDocumento" => $filaResultado['personalMauxiDocumento'],
            "personalMauxiCargo" => $filaResultado['personalMauxiCargo'],
            "personalMauxiNombres" => $filaResultado['personalMauxiNombres'],
            "personalMauxiPrimerApellido" => $filaResultado['personalMauxiPrimerApellido'],
            "personalMauxiSegundoApellido" => $filaResultado['personalMauxiSegundoApellido'],
            "personalMauxiMunicipioResidencia" => $filaResultado['personalMauxiMunicipioResidencia'],
            "municipioResidencia" => $filaResultado['MunResidencia'],
            "personalMauxiMunicipioNacimiento" => $filaResultado['personalMauxiMunicipioNacimiento'],
            "municipioNacimiento" => $filaResultado['MunNacimiento'],
            "personalMauxiTelefono" => $filaResultado['personalMauxiTelefono'],
            "personalMauxiFechaNacimiento" => $filaResultado['personalMauxiFechaNacimiento'],
            "personalMauxiEmail" => $filaResultado['personalMauxiEmail'],
            "personalMauxiExperiencia" => $filaResultado['personalMauxiExperiencia'],
            "personalMauxiAnosExperiencia" => $filaResultado['personalMauxiAnosExperiencia'],
            "personalMauxiEstudios" => $filaResultado['personalMauxiEstudios'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonPersonal);

?>