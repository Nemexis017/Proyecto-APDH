<?php 
    include('classAcceso.php');
    include('conexion.php');

    $conexion = new conexion();
    $datosAcceso= new acceso();

    session_start();
    if( (empty($_POST['txtUsuario']) || empty($_POST['txtPassword'])) ){
        // echo 'esta vacio esto';
        header('location:../login.php');
    }else{
        $usuario= $_POST['txtUsuario'];
        $clave= $_POST['txtPassword'];
    
        $datosAcceso->setUsuario($usuario);
        $datosAcceso->setClave($clave);
        
        $values = array(
            ':loginSystemUsuario' =>$datosAcceso->getUsuario() ,
            ':loginSystemClave' =>$datosAcceso->getClave()
        );
        
        $sqlAcceso= "SELECT loginId, personalmauxi.personalMauxiId, 
                            loginUsuario, loginClave, personalmauxi.personalMauxiNombres, 
                            personalmauxi.personalMauxiPrimerApellido 

                    FROM mauxi.login 
                    INNER JOIN mauxi.personalmauxi 
                    ON login.personalMauxiId = personalmauxi.personalMauxiId 
                    WHERE loginUsuario = :loginSystemUsuario
                    AND loginClave = md5(:loginSystemClave);";

        $numeroFilas= $conexion->numeroRegistro($sqlAcceso, $values);
        if($numeroFilas == 1){
            $loginPersona= $conexion->consultaValor($sqlAcceso, $values);

            foreach($loginPersona as $datosLogin){
                $_SESSION['personaId'] = $datosLogin['personalMauxiId'];
                $_SESSION['personaNombres'] = $datosLogin['personalMauxiNombres'];
                $_SESSION['personaPrimerApellido'] = $datosLogin['personalMauxiPrimerApellido'];
            }
            
            header('Location:../contenido_dash/principal_info');

        }
        else{
            header('location:../login.php');
        }
            
    }

    
?>
