<?php

//se carga la conexion
require_once 'conexion.php';

$id = $_POST['pid'];

//Se crea la sentencia que llama al procedimiento almacenado
$sentencia_sql = "CALL pa_activar_academia"."('$id')";

//Se ejecuta la sentencia sql y se alamcena el resultado
$result = $conexion->query($sentencia_sql);

if(!$result)die("Falló la sentencia sql " . $conexion->error);

$filas = array();

while($registro = mysqli_fetch_assoc($result)) {

    $filas[] = $registro;

}

echo json_encode($filas);

?>

