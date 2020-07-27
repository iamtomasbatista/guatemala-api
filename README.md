## Guatemala API

API realizada con Laravel 7 que implementa OAUTH2.0 usando Passport. 

### Endpoints:

- **/api/promotions**  
- **/api/promotions/{promotion}**
- **/api/login**
- **/api/signup**

## Requerimientos

- PHP v7.x

- Una base de datos MySQL corriendo en localhost con las siguientes credenciales:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=guatemaladb
DB_USERNAME=dev
DB_PASSWORD=Pa$$w0rd
```

## Instrucciones 

- Corre migrate:fresh --seed para que se creen todas las tablas necesarias y sean llenadas con data semilla. 

``` 
php artisan migrate --seed
```

- Levanta un servidor local.

```
php artisan serve
```
