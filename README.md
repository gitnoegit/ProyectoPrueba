# ProyectoPrueba

**Este proyecto utiliza.**
- **Laravel 5.8**
- **Angular 8.0.1**
- **Node.js v10.16.0**

## Instrucciones AbarrotesLaravel

1. Descargar proyecto

2. Si no tienes instalado php y mysql puedes instalar xampp
	https://www.apachefriends.org/es/index.html

3. Instalar composer si no lo tienes instalado
	https://getcomposer.org/

4. Ubicate en el directorio del proyecto laravel y ejecuta el siguiente comando para descargar todas las dependencias:
	composer install

5. Crear la base de datos para el proyecto con el nombre que desees. Yo utilicé el nombre tiendabarrotes para la base de datos y el 	    usuario root sin password, para realizar las pruebas

6. Configura los valores del archivo .env toma una copia del archivo .env.example para configurarlo.

6. Para crear las tablas ejecuta el comando de laravel
	> **php artisan migrate** 
	
7. Es necesario crear unos registros en ciertas tablas para que el proyecto funcione asi que ejecuta el comando 
	> **php artisan db:seed**

8. Por último corre el servidor de laravel para pruebas en el puerto 8000 que laravel por default toma ese puerto
	> **php artisan serve**

## Instrucciones AbarrotesAngular

1. instalar Node.js si aun no lo tienes instalado

2. instalar Angular con el siguiente comando
	> **npm install -g @angular/cli**
	
3. Descargar el proyecto en Angular

4. Correr el siguiente comando para descargar las dependencias del proyecto.
	> **npm install**
	
5. Iniciar el servidor
	> **ng serve --open**
