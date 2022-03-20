<?php 
    require 'clases/Conexion.php';
    require 'clases/Tarea.php';

    $tarea = new Tarea();
    $tareas = $tarea->listarTareas();


    foreach ( $tareas as $tarea) {
                                
        echo $tarea['title'];
    }


?>
                    


