<?php
    include('librerias/conexion.php');

    $conexion = new conexion(); 

    $resultado = $conexion->conectar();
    echo $resultado; 

?>