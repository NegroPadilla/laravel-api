# Back-end API mundo pacífico
Requerimiento entregado en prueba técnica

# OBSERVACIÓN: Idealmente utilizar Laragon pues entrega todas las herramientas necesarias. En caso de no usarlo se requiere:
- PHP 7.3
- Composer 2.1
- Base de datos MySQL
- WAMP o XAMPP con el projecto en la carpeta requerida

## Requisitos
- Laragon
## Pasos
- Clonar este repositorio en la carpeta de Laragon "C:/Laragon/www"
- Iniciar Laragon
- Clickear en el botón "Database" y generar una nueva conexión
- Abrir dicha conexión y crear una base de datos en ella de nombre a elección
- Iniciar la terminal de Laragon, navegar a la carpeta clonada y escribir:

```
composer install
```

- En la misma consola, ingresar los siguientes comandos:

```
cp .env.example .env
```

```
php artisan key:generate
```

- Una vez generada la key y el archivo .env se procede a la configuración de este
## Configurar Base de datos

- Posteriormente edite las credenciales de su base de datos en el archivo .env.example

```
DB_CONNECTION=mysql
```

```
DB_HOST=127.0.0.1
```

```
DB_PORT=3306
```

```
DB_DATABASE=(nombre de su base de datos, en este caso laravel)
```

```
DB_USERNAME=root
```

```
DB_PASSWORD=
```

- Con esto se termina la configuración de la base de datos.
## Puesta en marcha de la API
- En la terminal, realizar las migraciones

```
php artisan migrate:fresh
```

- Luego ejecutar los seeders
```
php artisan db:seed
```

## Finalmente la api quedará corriendo en la URL definida por laragon
En este caso debería ser "http://laravel-api.test"

Para tener conocimiento de las rutas (en caso de querer probar api con Postman o similar) revisar los arhivos de la carpeta Routes


