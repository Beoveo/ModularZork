# LEEME #

Este proyecto es una posible solución al ejercicio 3 de la asignatura. Además la estructura de la solución puede servir
como base o referencia para estructurar el código de vuestro proyecto.

Para poder utilizar el proyecto, debes importar los archivos sql ```estructura.sql``` que creará la BD y las tablas
vacías y ```datos.sql``` que importará unos datos de ejemplo. Consulta este último .sql para averiguar los usuarios que
están definidos en la aplicación y los roles que tienen. Recuerda que *debes deshabilitar la opción "Enable foreign key
checks"* para evitar problemas a la hora de importar los archivos.

Si colocas la carpeta del proyecto directamente dentro del directorio htdocs de Apache (o el que apunte la directiva
DocumentRoot) no tienes que hacer nada más. *Si colocas el proyecto en otras carpeta* tendrás que cambiar la constante
```RUTA_APP``` para que apunte a la URL donde está colgada la aplicación. Por ejemplo si la URL con la que accedes a la
aplicación es ```http://localhost/ejemplos/estructura-proyecto/``` la constante debe tomar el valor
```define('RUTA_APP', '/ejemplos/estructura-proyecto/');```