<?php

//se carga la conexion
require_once 'conexion.php';

//Se crea la sentencia que llama al procedimiento almacenado
$idTorneo = $_POST['pid_torneo'];
$idAlumno = $_POST['pid_alumno'];
$sentencia_sql = "CALL 	pa_eliminar_alumno_torneo"."('$idTorneo','$idAlumno')";


//Se ejecuta la sentencia sql y se alamcena el resultado
$result = $conexion->query($sentencia_sql);

if(!$result)die("Falló la sentencia sql " . $conexion->error);

echo $result;

?>
