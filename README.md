@@ -0,0 +1,40 @@
# Configuración de Plataforma de Empoderamiento de Mujeres y Pequeños Negocios
Este manual está dirigido a desarrolladres y encargados de servidores.

## Configuración de Base de Datos
El orden de corrida de los archivos en la carpeta **SQL** es de la siguiente forma

* 5by20.sql
* Procedures.sql
* Views.sql
* newTables.sql
* PostalCodes.sql
* Main.sql

## Rutas de Acceso Local y Producción
Los controladores del proyecto trabajan con un direccionamiento usando **$_SERVER['DOCUMENT_ROOT']** para trabajar en modo local es necesario quitar el comentario en
> include($_SERVER['DOCUMENT_ROOT'] . "/coca-cola/model/database.php");

Esto debido a que se requiere iniciar desde el documento raíz el cual es **coca-cola**, al momento de subir a Servidor (Producción) se deberá quitar el comentario de la linea

> include($_SERVER['DOCUMENT_ROOT'] . "/model/database.php");

Las peticiones a servidor desde Javascript funcionan a partir del archivo **host.js** el cual contiene la URL local, servidor y pruebas; Para trabajar en modo local se deberá remover el comentario de la linea

> return "http://localhost:9000/coca-cola/";

Para mover el proyecto a producción se deberá eliminar el comentario de la linea

> return "https://www.empoderamiento.coca-cola.com.mx/";


## Conexión de Base de Datos

En la ruta coca-cola/model/database.php se deberá eliminar el comentario de la conexión de PHP que se requiera utilizar de la siguiente manera.

```
    private $DB_HOST = 'HOST';
    private $DB_USER = 'USUARIO';
    private $DB_PASS = 'CONTRASEÑA';
    private $DB_NAME = '5by20';
```