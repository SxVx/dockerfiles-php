<?php

require_once "db.php";
// $sql = "SELECT * FROM productos";
// $resultado = obtenerRegistros($sql);
// print_r($resultado);

function todosLosProductos(){
  $query = "SELECT * FROM productos";
  return obtenerRegistros($query);
}