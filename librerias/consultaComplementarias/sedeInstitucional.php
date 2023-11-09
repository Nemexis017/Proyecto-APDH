<?php 
    include('../conexion.php'); 
    $conexion= new conexion(); 

    $consulta_sedeInstitucional= "SELECT `sede_institucional`.`sede_institucionalId`,
                            `sede_institucional`.`sede_institucionalNombre`,
                            `sede_institucional`.`sede_instuticionalCodigo`
                        FROM `mauxi`.`sede_institucional` ";

    $resultado_sedeInstitucional= $conexion->consulta($consulta_sedeInstitucional);

    foreach($resultado_sedeInstitucional as $resultadoSedeIn){
        $jsonSedeInstitucional[]=[
            "sede_institucionalId" => $resultadoSedeIn['sede_institucionalId'],
            "sede_institucionalNombre" => $resultadoSedeIn['sede_institucionalNombre'],
        ];
    }

    header("Content-type:application/json");
    echo json_encode($jsonSedeInstitucional);

?>