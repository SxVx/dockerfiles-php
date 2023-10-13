# Docker files para PHP
Se crean archivos docker file para levantar entorno de ejecución de PHP
Se elaboraron archivos php para comprobar el funcionamiento.

El archivo que hace uso de la base de datos es ```utilidades.php```
basta con hacer un require_once en el index para comprobar que se hayan instalado bien.

# Casos de uso para comprobación del entorno
```php
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
```


---
# Creación del entorno

Levantar entorno
```bash
  docker-compose -f docker-compose-dev.yml up --build
```

Deshacer entorno
```bash
  docker-compose -f docker-compose-dev.yml down 
```