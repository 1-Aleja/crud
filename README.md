

## Instalación

Clonar el repositorio

git clone https://github.com/1-Aleja/crud.git

Cambiar al directorio del proyecto

    cd Crud

Instalar las dependencias usando composer

    composer install

Generar los ficheros 'autoload' cargando las clases agregadas

	composer dump-autoload


Copiar el archivo env de ejemplo y realice los cambios de configuración necesarios en el archivo .env (definir la conexión a la base de datos)

    cp .env.example .env

Generar una nueva clave de aplicación

    php artisan key:generate


Ejecutar migraciones de base de datos

    php artisan migrate


Crear enlace simbólico para acceder a los archivos de la carpeta storage desde public

-Realizar inserts

Iniciar el servidor de desarrollo local.

    php artisan serve

Ahora puede acceder al servidor en http://localhost:8000 realizando login con los datos de acceso  por defecto del usuario administrador.
