<?php
    include('conexion.php');
    $conexion= new conexion();
    
    header('Content-type:application/json');
    $id_verifi = json_decode(file_get_contents('php://input'), true);

    $value_Id_verifi= array(
        ":id_varificacion" => $id_verifi['idPersonal']
    );
    
    $slqConsultaVerificacion= "SELECT 
                            `personalmauxi`.`tipoPersonaId`,
                            tipoPersonaNombre,
                            `personalmauxi`.`tipoDocumentoId`,
                            tipoDocumentoNombre,
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
                        WHERE personalMauxiId= :id_varificacion";

    
    $consulta_verificacion= $conexion->consultaValor($slqConsultaVerificacion,$value_Id_verifi);
    
    foreach($consulta_verificacion as $fila_datos_verificacion){
        $json_consultaVerificacion[]=[
            "tipoPersonaId" => $fila_datos_verificacion['tipoPersonaId'],
            "tipoPersonaNombre" => $fila_datos_verificacion['tipoPersonaNombre'],
            "tipoDocumentoId" => $fila_datos_verificacion['tipoDocumentoId'],
            "tipoDocumentoNombre" => $fila_datos_verificacion['tipoDocumentoNombre'],
            "personalMauxiDocumento" => $fila_datos_verificacion['personalMauxiDocumento'],
            "personalMauxiCargo" => $fila_datos_verificacion['personalMauxiCargo'],
            "personalMauxiNombres" => $fila_datos_verificacion['personalMauxiNombres'],
            "personalMauxiPrimerApellido" => $fila_datos_verificacion['personalMauxiPrimerApellido'],
            "personalMauxiSegundoApellido" => $fila_datos_verificacion['personalMauxiSegundoApellido'],
            "personalMauxiMunicipioResidencia" => $fila_datos_verificacion['personalMauxiMunicipioResidencia'],
            "nombreMunicipioResidencia" => $fila_datos_verificacion['MunResidencia'],
            "personalMauxiMunicipioNacimiento" => $fila_datos_verificacion['personalMauxiMunicipioNacimiento'],
            "nombreMunicipioNacimiento" => $fila_datos_verificacion['MunNacimiento'],
            "personalMauxiTelefono" => $fila_datos_verificacion['personalMauxiTelefono'],
            "personalMauxiFechaNacimiento" => $fila_datos_verificacion['personalMauxiFechaNacimiento'],
            "personalMauxiEmail" => $fila_datos_verificacion['personalMauxiEmail'],
            "personalMauxiExperiencia" => $fila_datos_verificacion['personalMauxiExperiencia'],
            "personalMauxiAnosExperiencia" => $fila_datos_verificacion['personalMauxiAnosExperiencia'],
            "personalMauxiEstudios" => $fila_datos_verificacion['personalMauxiEstudios'],
        ];
    }

    echo json_encode($json_consultaVerificacion);

?>