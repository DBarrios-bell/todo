## Conexion a la Base de Datos

Para conectar la base de datos se creo el archivo conexion.php donde se establecieron las variables de conexion a la base de datos
    - localhost
    - usuario
    - contraseña
    - nombre de la base de datos

ademas se crea una variable llamada $conexion la cual hace referencia new mysqli y los parametros antes mensionado para asi poder trabajar desde otro archivo o controlador con esta variable de conexion

## Controlador.php
En este archivo estan todo el proceso funciones que permiten la creacion, edicion y eliminacion de las tareas almacenadas y para llevar a cabo los proceso cuenta con el archivo de conexion y la variable $conexion

## ListTaks
Tambien cuenta con conexion a la base de datos y le muestra al usuario cada uno de los registros almacenado en una tabla, esta tabla tiene un form en el campo del checkbox el cual ejecuta onchange="this.form.submit()" y asi se actualiza el estado de la tarea teniendo en cuenta que en el controlador se hace el proceso de actualizacion de la tarea en la base de datos a traves del id.

## Index.php
Este cuenta con una funcion que permite validar el campo detalle de la tarea para evitar que este se envie en null y si pasa la validacion este envia el dato a la funcion encargada del insertar en la base de datos la cual se encuentra en el controlador y asu vez esta funcion evita que la pagina se recargue al hacer una peticion y la otra funcion se encarga de listar en tiempo real las tareas almacenadas para asi poder eliminar o marcar como finalizada.