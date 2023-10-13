<?php

$server = "m1-db";
$user = "root";
$pass = "root";
$database = "m1";
$port = "3306";

$conexion = new mysqli($server,$user,$pass,$database,$port);

if($conexion->connect_errno){
  die($conexion->connect_error);
}

/**
 * Esta función sirve solo para INSERT, UPDATE, DELETE
 * @param $query Consulta a la BD
 * @param &$conexion Variable para uso de conexión || & - apuntador
 * Condición indica de que si no se le pasa la variable conexion 
 * tome la definida al principio del archivo
 */
function nonQuery($query, &$conexion = null){
  if(!$conexion){ global $conexion;}
  $conexion->query($query);
  return $conexion->affect_row;
}

/**
 * Lectura SELECT
 * @param $query Consulta a la BD
 * @param &$conexion Variable para uso de conexión || & - apuntador
 */
function obtenerRegistros($query, &$conexion = null){
  if(!$conexion){ global $conexion;}
  $result = $conexion->query($query);
  $resultArray = array();
  foreach($result as $registro){
    $resultArray[] = $registro;
  }
  return $resultArray;
}


