<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $sqlTipoDocumento= "SELECT * FROM mauxi.tipodocumento";

    $relTipoDocumento= $conexion->consulta($sqlTipoDocumento);

    foreach($relTipoDocumento as $filaResultado){
        $jsonTipoDocumento[]=[
            "tipoDocumentoId" => $filaResultado['tipoDocumentoId'],
            "tipoDocumentoNombre" => $filaResultado['tipoDocumentoNombre'],
            "tipoDocumentoSigla" => $filaResultado['tipoDocumentoSigla'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonTipoDocumento);

?>