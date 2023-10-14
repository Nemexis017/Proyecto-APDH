<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $sqlTipoPersona= "SELECT * FROM mauxi.tipopersona";

    $relTipoPersona= $conexion->consulta($sqlTipoPersona);

    foreach($relTipoPersona as $filaResultado){
        $jsonTipoPersona[]=[
            "tipoPersonaId" => $filaResultado['tipoPersonaId'],
            "tipoPersonaNombre" => $filaResultado['tipoPersonaNombre'],
    
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonTipoPersona);

?>