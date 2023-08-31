
function tiempoReal() {
    var tabla = $.ajax({
        url: 'listTask.php',
        dataType: 'text',
        async: false
    }).responseText;

    document.getElementById("tableTask").innerHTML = tabla;
}
setInterval(tiempoReal, 1000);

$("#enviar").click(function(event) {
    event.preventDefault();
    $data = $("#task_id").serialize(); 
    $datareal = $data.replace("task=",'')
    
    if ($datareal === null || $datareal === "") {
        alert('Por favor escribir el detalle de la tarea');
        return;
    }
    $.ajax({
        url: "index.php",
        type: "POST",
        data: $("#task_id").serialize(),
        success: function(task) {
            $("#ajax").html(task); 
        }
    });
    alert('Guardado Con Exito');
    return false;
});