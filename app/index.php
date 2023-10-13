<?php

require_once "utilidades.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
  
  $var = $_GET["url"];

  switch ($var) {
    case 'productos':
        $resp = todosLosProductos();
        echo json_encode($resp);
      break;
      
    default:
      # code...
      break;
  }

  http_response_code(200);
}elseif($_SERVER["REQUEST_METHOD"] == "POST"){
  echo "POST";
  http_response_code(200);
}else{
  http_response_code(405);
}


