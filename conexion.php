<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "todophp";

    try {
        $conexion = new mysqli($host, $user, $password, $database);
        // $conexion = mysqli_connect( $local, $user, $password, $database );
    } catch (Exception $e) {
        echo "Ocurrio un error al intentar conectar con la base de datos: " . $e->getMessage();
    }

// if ($conexion -> connect_error)
// {
// 	die("Fallo la conexion:(".$conexion -> mysqli_connect_error().")".$conexion-> 
// 		mysqli_connect_error());
// }
?>