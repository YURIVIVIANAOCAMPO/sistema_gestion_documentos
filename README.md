<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Prueba Técnica - Sistema de Registro de Documentos

Este proyecto es una prueba técnica que consiste en desarrollar un CRUD (Create, Read, Update, Delete) para el registro de documentos utilizando PHP y siguiendo el patrón de diseño MVC (Modelo-Vista-Controlador) o servicios web REST. La interfaz de usuario no requiere estilización, pero debe ser funcional.

## Endpoints

-Procesos
    GET - http://127.0.0.1:8000/api/proceso/list                Listar general
    POST - http://127.0.0.1:8000/api/proceso/add                Guardar
    GET - http://127.0.0.1:8000/api/proceso/list/1              Listar por id
    PUT - http://127.0.0.1:8000/api/proceso/update/1            Actualiza por id
    DELETE - http://127.0.0.1:8000/api/proceso/delete/1         Elimina por id

-Tipo documentos
    GET - http://127.0.0.1:8000/api/tipodoc/list                Listar general
    POST - http://127.0.0.1:8000/api/tipodoc/add                Guardar
    GET - http://127.0.0.1:8000/api/tipodoc/list/1              Listar por id
    PUT - http://127.0.0.1:8000/api/tipodoc/update/1            Actualiza por id
    DELETE - http://127.0.0.1:8000/api/tipodoc/delete/1         Elimina por id
 
- Documentos
   GET - http://127.0.0.1:8000/api/document/list                Listar general
   POST - http://127.0.0.1:8000/api/document/add                Guardar
   GET - http://127.0.0.1:8000/api/document/list/1              Listar por id
   PUT - http://127.0.0.1:8000/api/document/update/1            Actualiza por id
   DELETE - http://127.0.0.1:8000/api/document/delete/1         Elimina por id


## Requerimientos

- PHP (versión 8.1.12)
- Servidor web (Apache/2.4.54 (Win64) OpenSSL/1.1.1p)
- Base de datos MySQL (versión 8.1.12)
- Git (versión 2.40.0)
- Composer (versión 2.5.8)

## Instalación

1. Clona el repositorio a tu directorio local: `git clone https://github.com/YURIVIVIANAOCAMPO/sistema_gestion_documentos.git`
2. Instala las dependencias utilizando Composer: `composer install`
3. Crea la base de datos: `gestion_documentos_db`
4. Realiza la migración de la base de datos: `php artisan migrate`
5. Ejecuta el proyecto: `php artisan serve`

## Uso

1. Abre tu navegador web y accede a la URL del proyecto: `http://127.0.0.1:8000`
2. Se mostrará la página de inicio con un formulario de inicio de sesión.
3. Inicia sesión utilizando las siguientes credenciales:
   - Usuario: admin
   - Contraseña: 123456
4. Una vez iniciada la sesión, podrás realizar las siguientes acciones:
   - Ver la lista de documentos registrados.
   - Buscar documentos por nombre.
   - Crear nuevos documentos.
   - Editar documentos existentes.
   - Eliminar documentos.

## Tecnologías Utilizadas

- Backend: PHP (versión 8.1.12) con arquitectura MVC implementada en el framework LARAVEL







