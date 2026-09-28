# Jenkins – Pipeline CI/CD con Docker

Práctica de la asignatura [PPS], CIB.

Pipeline de Jenkins que construye una imagen Docker con una aplicación PHP
y la despliega automáticamente con Docker Compose.

## Contenido
- `Jenkinsfile`: etapas del pipeline (clonado, build de la imagen y despliegue).
- `Dockerfile`: imagen basada en [imagen base] que ejecuta la app con un usuario sin privilegios.
- `docker-compose.yml`: definición del servicio web.
- `index.php`: página de prueba para verificar el despliegue.

## Qué aprendí
- Definir un pipeline como código con Jenkinsfile.
- Automatizar build y despliegue de contenedores.
- Gestión de credenciales en Jenkins, si aplica
- Riesgos de exponer credenciales en un pipeline y cómo gestionarlas de forma segura en Jenkins.
