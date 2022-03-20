<?php 
  require 'clases/Conexion.php';
  require 'clases/Tarea.php';
  $tarea = new Tarea;
  $tareas = $tarea->listarTareas();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">  
  <title>TO-DO Man</title>
  <link rel="stylesheet" href="normalize.css">
  <script src="modernizr.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body> 
    <nav>
        <div>
            <a href="portada.php">TO-DO Man</a>
        </div>
    </nav>

    <section>
  
        <h2>To-Do List</h2>
            <table>
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    foreach ( $tareas as $tarea) {
                    ?>
                    <tr>
                        <td> <?=$tarea['id']?> </td>
                        <td> <?=$tarea['title']?> </td>
                        <td> <?=$tarea['description']?> </td>
                        <td><a href="eliminar.php">Delete</a></td>
                    </tr>
                        <?php } ?>
                </tbody>
          </table>
      
        <div>
            <a  href="new.php" role="button">Insert Task</a>
        </div>


    </section>



 <!--  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
  <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
</div> -->
 
</body> 
</html>