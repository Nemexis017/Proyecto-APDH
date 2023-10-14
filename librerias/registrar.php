<?php 
    include('conexion.php');
    $conexion= new conexion();
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    $values= array(
        ":tipoPersonaId"=> $data['tipoPersonaId'],
        ":tipoDocuemtoId"=> $data['tipoDocumentoId'],
        ":personalMauxiDocumento"=> $data['personalMauxiDocumento'],
        ":personalMauxiCargo"=> $data['personalMauxiCargo'],
        ":personalMauxiNombres"=> $data['personalMauxiNombres'],
        ":personalMauxiPrimerApellido"=> $data['personalMauxiPrimerApellido'],
        ":personalMauxiSegundoApellido"=> $data['personalMauxiSegundoApellido'],
        ":personalMauxiMunicipioResidencia"=> $data['personalMauxiMunicipioResidencia'],
        ":personalMauxiMunicipioNacimiento"=> $data['personalMauxiMunicipioNacimiento'],
        ":personalMauxiTelefono"=> $data['personalMauxiTelefono'],
        ":personalMauxiFechaNacimiento"=> $data['personalMauxiFechaNacimiento'],
        ":personalMauxiEmail"=> $data['personalMauxiEmail'],
        ":personalMauxiExperiencia"=> $data['personalMauxiExperiencia'],
        ":personalMauxiAnosExperiencia"=> $data['personalMauxiAnosExperiencia'],
        ":personalMauxiEstudios"=> $data['personalMauxiEstudios'],
    );

    $sqlInsertPersonal= "INSERT INTO `mauxi`.`personalmauxi`
    (
    `tipoPersonaId`,
    `tipoDocumentoId`,
    `personalMauxiDocumento`,
    `personalMauxiCargo`,
    `personalMauxiNombres`,
    `personalMauxiPrimerApellido`,
    `personalMauxiSegundoApellido`,
    `personalMauxiMunicipioResidencia`,
    `personalMauxiMunicipioNacimiento`,
    `personalMauxiTelefono`,
    `personalMauxiFechaNacimiento`,
    `personalMauxiEmail`,
    `personalMauxiExperiencia`,
    `personalMauxiAnosExperiencia`,
    `personalMauxiEstudios`)
    VALUES
    (
        :tipoPersonaId,
        :tipoDocuemtoId,
        :personalMauxiDocumento,
        :personalMauxiCargo,
        :personalMauxiNombres,
        :personalMauxiPrimerApellido,
        :personalMauxiSegundoApellido,
        :personalMauxiMunicipioResidencia,
        :personalMauxiMunicipioNacimiento,
        :personalMauxiTelefono,
        :personalMauxiFechaNacimiento,
        :personalMauxiEmail,
        :personalMauxiExperiencia,
        :personalMauxiAnosExperiencia,
        :personalMauxiEstudios

    );"; 

    if(empty(array_filter($values))){
        $registrarPersonal= "";
    }else{
        $registrarPersonal=$conexion->ejecutar($sqlInsertPersonal,$values);
    }

    
    if($registrarPersonal == 1){
        $response = ["registroEjecutado"=> "OK"];
    }else{
        $response = ["registroEjecutado"=> "NO"];
    }
        
    header('Content-type:application/json');
    echo json_encode($response)
    
    





    // $numeroDocumento = $_POST['personalMauxiDocumento'];
    // $nombres = $data['personalMauxiNombres'];
    // $cargo = $data['personalMauxiCargo'];
    
    // echo $nombres;
        

// $personalMauxiDocumento = $data['personalMauxiDocumento'];

// foreach($personalMauxiDocumento as $filaResultado){

//     $personaNombre= $filaResultado['personalMauxiNombres'];
// }

// echo $personalMauxiDocumento;
// if($data) {
    //     echo $personalMauxiDocumento;
    //     echo json_encode(['mensaje' => 'Datos recibidos con éxito']);
    // } else {
    //     http_response_code(400);
    //     echo json_encode(['error' => 'Error en la solicitud']);
    // }





    // $values= array(
    //     ":tipoPersonaId"=> $_POST['selTipoPersona'],
    //     ":tipoDocuemtoId"=> $_POST['selTipoDocumento'],
    //     ":personalMauxiDocumento"=> $_POST['numDocumento'],
    //     ":personalMauxiCargo"=> $_POST['txtCargo'],
    //     ":personalMauxiNombres"=> $_POST['txtNombres'],
    //     ":personalMauxiPrimerApellido"=> $_POST['txtPrimerApellido'],
    //     ":personalMauxiSegundoApellido"=> $_POST['txtSegundoApellido'],
    //     ":personalMauxiMunicipioResidencia"=> $_POST['txtMunicipioResidencia'],
    //     ":personalMauxiMunicipioNacimiento"=> $_POST['txtMunicipioNacimiento'],
    //     ":personalMauxiTelefono"=> $_POST['txtTelefono'],
    //     ":personalMauxiFechaNacimiento"=> $_POST['txtFechaNacimiento'],
    //     ":personalMauxiEmail"=> $_POST['txtEmail'],
    //     ":personalMauxiExperiencia"=> $_POST['txtExperiencia'],
    //     ":personalMauxiAnosExperiencia"=> $_POST['numbAnoExperiencia'],
    //     ":personalMauxiEstudios"=> $_POST['txtEstudiosRealizados'],
        
    // );
    
    // $sqlInsertPersonal= "INSERT INTO `mauxi`.`personalmauxi`
    // (
    // `tipoPersonaId`,
    // `tipoDocuemtoId`,
    // `personalMauxiDocumento`,
    // `personalMauxiCargo`,
    // `personalMauxiNombres`,
    // `personalMauxiPrimerApellido`,
    // `personalMauxiSegundoApellido`,
    // `personalMauxiMunicipioResidencia`,
    // `personalMauxiMunicipioNacimiento`,
    // `personalMauxiTelefono`,
    // `personalMauxiFechaNacimiento`,
    // `personalMauxiEmail`,
    // `personalMauxiExperiencia`,
    // `personalMauxiAnosExperiencia`,
    // `personalMauxiEstudios`)
    // VALUES
    // (
    //     :tipoPersonaId,
    //     :tipoDocuemtoId,
    //     :personalMauxiDocumento,
    //     :personalMauxiCargo,
    //     :personalMauxiNombres,
    //     :personalMauxiPrimerApellido,
    //     :personalMauxiSegundoApellido,
    //     :personalMauxiMunicipioResidencia,
    //     :personalMauxiMunicipioNacimiento,
    //     :personalMauxiTelefono,
    //     :personalMauxiFechaNacimiento,
    //     :personalMauxiEmail,
    //     :personalMauxiExperiencia,
    //     :personalMauxiAnosExperiencia,
    //     :personalMauxiEstudios

    // );"; 

    // $conexion->ejecutar($sqlInsertPersonal,$values);

    // $sqlConsultaId= "SELECT * FROM personalmauxi
    // ORDER BY personalMauxiId DESC
    // LIMIT 1";

    // $personalId= $conexion->consulta($sqlConsultaId);

    // foreach($personalId as $id){
    //     $personalArrId = $id['personalMauxiId'];
    // };


    
    // header("Location:../loginRegistro.php?id=".$personalArrId."");


?>



    