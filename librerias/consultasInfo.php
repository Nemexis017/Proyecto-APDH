<?php
    include('conexion.php');
    $conexion = new conexion(); 

    $sqlNumeroDirectivos = "SELECT COUNT(*) AS total_directivos
                            FROM mauxi.personalmauxi
                            WHERE tipoPersonaId = 1";

    $sqlNumeroProfesores = "SELECT COUNT(*) AS total_profesores
                            FROM mauxi.profesores";
    
    $sqlNumeroPersonalPlanta ="SELECT COUNT(*) AS total_personal
                                FROM mauxi.personalmauxi
                                WHERE tipoPersonaId = 4";

    $sqlNumeroEstudiantes = "SELECT COUNT(*) AS total_estudiantes
                            FROM mauxi.estudiantes";

    $slqMatrias = "SELECT profesoresMateria FROM mauxi.profesores";
    $sqlSedes = "SELECT sede_institucionalNombre FROM mauxi.sede_institucional";

    $conteoDirectivos = $conexion->consulta($sqlNumeroDirectivos); 
    $conteoProfesores = $conexion->consulta($sqlNumeroProfesores);
    $conteoPersonal = $conexion->consulta($sqlNumeroPersonalPlanta);
    $conteoEstudiantes = $conexion->consulta($sqlNumeroEstudiantes);
    $materiasDispuestas = $conexion->consulta($slqMatrias);
    $sedesDispuestas = $conexion->consulta($sqlSedes);


?>