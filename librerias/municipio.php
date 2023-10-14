<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $sqlMunicipio= "SELECT * FROM mauxi.municipio";

    $relMunicipio= $conexion->consulta($sqlMunicipio);

    foreach($relMunicipio as $filaResultado){
        $jsonMunicipio[]=[
            "municipioId" => $filaResultado['municipioId'],
            "municipioNombre" => $filaResultado['municipioNombre'],
            "municipioCodigoDane" => $filaResultado['municipioCodigoDane'],
            "departamentoId" => $filaResultado['departamentoId'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonMunicipio);

?>