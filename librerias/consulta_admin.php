<?php 
    include('conexion.php'); 
    $conexion= new conexion(); 

    $consulta_usuarios= "SELECT `login`.`loginId`,
                        `login`.`personalMauxiId`,
                        personalMauxiNombres,
                        personalMauxiPrimerApellido,
                        `login`.`loginUsuario`,
                        `login`.`loginClave`
                    FROM `mauxi`.`login`
                    INNER JOIN personalmauxi 
                    ON login.personalMauxiId = personalmauxi.personalMauxiId";

    $usuarios_admin= $conexion->consulta($consulta_usuarios);

    foreach($usuarios_admin as $fila_usuario){
        $json_admin[]=[
            "personalMauxiNombres"=> $fila_usuario['personalMauxiNombres'],
            "personalMauxiPrimerApellido"=> $fila_usuario['personalMauxiPrimerApellido'],
            "loginUsuario"=> $fila_usuario['loginUsuario']
        ];
    }

    header("Content-type:application/json");
    echo json_encode($json_admin);

?>