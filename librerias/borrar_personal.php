<?php
    include('conexion.php');
    $conexion= new conexion();
    
    $data_id = json_decode(file_get_contents('php://input'), true);

    $value_Id= array(
        ":idPersonal" => $data_id['idPersonal']
    );

    $slq_borar_personal= "DELETE FROM `mauxi`.`personalmauxi`
                        WHERE personalMauxiId = :idPersonal"; 
                        
    if(empty(array_filter($value_Id))){
        $registrarPersonal= "";
    }else{
        $eliminacion= $conexion->ejecutar($slq_borar_personal,$value_Id); 
    }

    if($eliminacion == 1){
        $response = ["eliminacion"=> "OK"];
    }else{
        $response = ["eliminacion"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response);

?>