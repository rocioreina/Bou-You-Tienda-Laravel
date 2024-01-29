[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/45dFqHPw)
# Bou & You

Es una aplicación web destinada a la gestión de una tienda de ropa.

Esta aplicación consta de tres partes:

- Catálogo y visualización: Si no has iniciado sesión, puedes explorar el catálogo de productos y filtrar por categorías como accesorios, ropa y calzado. Además, podrás ver individualmente cada artículo.

- Funcionalidades de usuario normal: Si te registras como usuario normal, además de las funciones anteriores, tendrás la posibilidad de añadir productos al carrito o a tus favoritos, también podrás acceder a sus respectivas vistas y realizar el pago de los artículos seleccionados.

- Funcionalidades de usuario administrador: Si te registras como usuario administrador, podrás acceder a todas las funciones disponibles, incluyendo la capacidad de gestionar el catálogo de productos. Esto significa que podrás agregar nuevos artículos, así como editar y actualizar la información de los existentes.

Este proyecto ha sido realizado en una zona de desarrollo:

- Backend: donde he trabajado con Laravel.

Enlace a la aplicación: [http://51.83.77.47:8000/](http://51.83.77.47:8000/)

## Iniciar el proyecto

Para desplegar la aplicación tenemos que seguir los siguientes pasos:

1. Clona el repositorio ejecutando el siguiente comando en tu terminal:

`git clone https://github.com/politecnicoDAW-2022/2022-2023---proyecto-integrado-rocioreina.git`

o puedes descargar el repositorio directamente.

2. Una vez estemos dentro de nuestro repositorio, accedemos a nuestra carpeta TiendaRopa y ejecutamos:

   a. Para instalar las dependencias del proyecto: `composer install` y `npm install`

   b. Para construir ciertas dependencias del proyecto: `npm run build`

   c. Para actualizar las dependencias del proyecto a las últimas versiones compatibles disponibles: `composer update`

   d. Copia el archivo `.env.example` y renómbralo como `.env`. Luego abre el archivo `.env` y configura la información específica de tu entorno, como la configuración de la base de datos.

   e. Para seguridad adicional de la aplicación lanzamos: `php artisan key:generate`

   f. Ejecuta las migraciones de base de datos pendientes utilizando el comando: `php artisan migrate`

   g. Para agregar datos predefinidos o de prueba a la base de datos, ejecuta los seeders utilizando el comando: `php artisan db:seed`

3. Para construir las imágenes y servicios haciendo uso de nuestro Dockerfile y docker-compose.yml: `docker compose build tienda_ropa`

4. Iniciamos los servicios construidos con el siguiente comando: `docker compose up –d`

5. Finalmente accedemos al puerto 8000 de nuestro localhost o server domain.

## Credenciales

Cuando se completen los pasos descritos se tendrán ya dos usuarios creados:

- Usuario normal
  - Usuario: rocio@gmail.com
  - Contraseña: rocio

- Usuario admin
  - Usuario: rocio2@gmail.com
  - Contraseña: rocio

## Tecnologías usadas:

1. PHP: Lenguaje de programación en el que está basado Laravel.
2. HTML: Lenguaje utilizado para estructurar y presentar el contenido en la web
Tecnologías usadas:
3. CSS: Lenguaje utilizado para aplicar estilos y diseños a los elementos HTML.
4. MySQL: Sistema de gestión de bases de datos utilizado para almacenar y recuperar datos en la aplicación.
5. Composer: Herramienta de gestión de dependencias de PHP utilizada para administrar las bibliotecas y paquetes utilizados en el proyecto.
6. Blade: Motor de plantillas utilizado en Laravel para generar las vistas HTML de la aplicación.
7. Tailwind: Un framework CSS que se utiliza para el diseño y estilización de los componentes y elementos visuales de tu aplicación.
8. Eloquent: ORM (Object-Relational Mapping) utilizado para interactuar con la base de datos y realizar operaciones de lectura y escritura de manera simplificada.

## Dependencias usadas:
1. fortawesome/fontaswesome-free: Una biblioteca de iconos, se utiliza para agregar iconos a tu interfaz de usuario.
2. heroicons/vue: Una colección de iconos optimizados para su uso en aplicaciones web.

