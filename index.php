<?php
$errors = "";
require_once 'controlador.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <title>Todo</title>

</head>
<body>
    <div class="container">
        <h1 class="txt">Lista de tareas</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-4">
                <form id="task_id" method="POST">
                    <label for="task" class="form-label">Detalle de la Tarea</label>
                    <textarea class="form-control" id="task_" name="task" rows="3"></textarea>
                    <?php if (empty($_POST['task'])) { ?>
                        <p>
                            <?php echo $errors; ?>
                        </p>
                    <?php  } ?>
                    <button type="button" id="enviar" name="enviar" class="btn btn-outline-success mt-3">Agregar Tarea</button>
                    
                </form>
            </div>
            <div id="tableTask" class="mb-3 col-md-8 scrollbar">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>