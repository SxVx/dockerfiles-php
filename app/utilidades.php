<?php

require_once "db.php";

/**
 * Comprobamos conexión a BD
 * Se comprueba que este bien instaladas las dependencias:
 * pdo pdo_mysql mysqli
 */

function todosLosProductos(){
  $query = "SELECT * FROM productos";
  return obtenerRegistros($query);
}