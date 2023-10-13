# Docker files para PHP
Se crean archivos docker file para levantar entorno de ejecución de PHP
Se elaboraron archivos php para comprobar el funcionamiento

Levantar entorno
```bash
  docker-compose -f docker-compose-dev.yml up --build
```

Deshacer entorno
```bash
  docker-compose -f docker-compose-dev.yml down 
```