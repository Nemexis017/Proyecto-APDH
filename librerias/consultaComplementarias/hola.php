<?php 
    include('../conexion.php'); 
    $conexion= new conexion(); 

    $consulta_gobierno= "SELECT * FROM mauxi.gobiernoestudiantil;";

    $resultado_gobierno= $conexion->consulta($consulta_gobierno);

    foreach($resultado_gobierno as $resultadoGobierno){
        $jsonGobierno[]=[
            "gobiernoEstudiantilId" => $resultadoGobierno['gobiernoEstudiantilId'],
            "gobiernoEstudiantilNombre" => $resultadoGobierno['gobiernoEstudiantilNombre'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonGobierno);

?>