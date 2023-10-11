<?php
    include('conexion.php');
    include('classAcceso.php');

    $conexion= new conexion(); 
    $datosUsuario= new acceso(); 

    $personalMauxiId= $_POST['idMuaxi'];
    $usuario= $_POST['txxUsuario'];
    $clave= $_POST['txtClave'];

    $datosUsuario->setUsuario($usuario);
    $datosUsuario->setClave($clave);

    $values= array( 
        // ":personaId" =>$personalMauxiId,
        ":usuario"=>$datosUsuario->getUsuario(),
        ":clave"=>$datosUsuario->getClave()
    );


    $sqlInsertLogin= "INSERT INTO `mauxi`.`login`
    (
    `personalMauxiId`,
    `loginUsuario`,
    `loginClave`)
    VALUES
    (
        $personalMauxiId,
        :usuario,
        md5(:clave)

    )";
    $registroLogin= $conexion->ejecutar($sqlInsertLogin,$values);

    header('Location:../login.php');

?>