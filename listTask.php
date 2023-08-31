<?php
    
    require_once 'conexion.php';

    // Consulta los registros de base de datos
        $tasks=$conexion->query("SELECT * FROM tasks");

    //tabla listar tareas
    echo 
    '<table class="table table-bordered table-striped mb-0 scrollbar">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tareas</th>
                            <th class="text-center">Completada</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>';
                        $i = 1;
                        while ($task = $tasks->fetch_array(MYSQLI_BOTH)) {
                            echo '<tr>
                                <th scope="row">'. $i .'</th>
                                <td> <span class="';echo $task['completada'] == 1 ? 'subrayado' : ''; echo '">'. $task['tarea'].'</span></td>
                                <td class="text-center">
                                    <form action="" method="POST">

                                        <input type="hidden" name="id" value="'; echo $task['id']; echo '">
                                        <input class="form-check-input" type="checkbox" name="completada" 
                                        value="'; echo $task['completada']; echo '" id="flexCheckChecked" 
                                        onchange="this.form.submit()" '; echo $task['completada'] == 1 ? 'checked' : ''; echo '>
                                    
                                    </form>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?eliminar_tarea='.$task['id']. '" class="badge bg-danger">X</a>
                                </td>
                            </tr>';
                         $i++;
                        }
                         '</tbody>
                </table>'

?>