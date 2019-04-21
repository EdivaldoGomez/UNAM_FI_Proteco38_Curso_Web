```
Resumen tomado de https://www.w3schools.com/php7
```



# PHP 7

## Antecedentes

En PHP hay tres tipos de variables

* locales
* globales
* estáticas

Así accedemos a una variable global.

```php
<?php
$edad = 10;
echo "La edad es $edad"
function aumentarEdad(){
    gobal $edad
    $edad = 10 + 1;    
}
aumentar edad();
echo "La edad es $edad"
```

**Arreglo asociativos**

Las matrices asociadas son matrices que usan *claves* nombradas que nosotros designamos.

```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
```

```php
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
```



## Variables definidas en PHP 7

### Variables superglobales

PHP almacena las variables globales en una matriz llamada `$GLOBALS[index]`.  

En donde  `index` es el nombre de la variable.

`$GLOBALS[index]` pude ser usado para acceder a las variables globales sin necesidad de poner la palabra reservado `global`.

### Variables de uso común (generales)

Las variables superglobales más comunes en PHP son

- $GLOBALS
- $_SERVER
- $_REQUEST
- $_POST
- $_GET
- $_FILES
- $_ENV
- $_COOKIE
- $_SESSION

## Sesiones

Una sesión es una forma de almacenar información (en variables) que se utilizará en varias páginas.

El servidor web no sabe quién es usted o qué hace, porque la dirección HTTP no mantiene el estado.

## Cookies


## Temas en clase de la clase
* Inyección SQL
* Sanitización de cadeas
* Vulnerabilidades de PHP puro
* Ejemplo página IPN
* Uso de templates
* AJAX

## Flujo de la clase
* construir archivo de configuración
* usar "require once"

## Tareas
* Hashear la contraseña
* Sanitizar
* Ajax
