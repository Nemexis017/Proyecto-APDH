<?php
    include('../conexion.php');
    $conexion= new conexion();
    
    $data_idPr = json_decode(file_get_contents('php://input'), true);

    $value_Id= array(
        ":profesorId" => $data_idPr['profesorId']
    );

    $slq_borar_profesor="DELETE FROM `mauxi`.`profesores`
                        WHERE profesoresId = :profesorId"; 
                        
    if(empty(array_filter($value_Id))){
        $deleteTeacher= "";
    }else{
        $deleteTeacher= $conexion->ejecutar($slq_borar_profesor,$value_Id); 
    }

    if($deleteTeacher == 1){
        $response = ["deleteTeacher"=> "OK"];
    }else{
        $response = ["deleteTeacher"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response);

?>