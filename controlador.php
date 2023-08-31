<?php
    require_once 'conexion.php';
    

    // Almacena la tarea en la base y hace la validacion si el campo esta vacio
    if(isset($_POST['task'])){
        $task = $_POST['task'];
        if(empty($task)){
            $errors = 'El campo se encuentra vacio';
        }else{
            mysqli_query($conexion, "INSERT INTO tasks (tarea) VALUE ('$task')");
            header('location: index.php');
        }
    }

    // Actualiza el estado de la tarea
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $completada =(isset($_POST['completada']))?1:0;
        
        mysqli_query($conexion, "UPDATE tasks SET completada = $completada WHERE id = $id");
        header('location: index.php');
    }

    // Elimina las tareas
    if(isset($_GET['eliminar_tarea'])){
        $id = $_GET['eliminar_tarea'];

        mysqli_query($conexion, "DELETE FROM tasks WHERE id=$id");
        header('location: index.php');

    }

?>
