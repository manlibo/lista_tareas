<?php 
  require 'clases/Conexion.php';
  require 'clases/Tarea.php';



  $tarea = new Tarea;
  $tareas = $tarea->listarTareas();

?> 


<!doctype html>
<html>


<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
 
  
  <title>TO-DO Man</title>
  <link rel="stylesheet" href="./main.css">
  <!-- <style>
    body{
      font-family: "Helvetica Neue", Raleway, sans-serif;
      font-weight: 50;
      color: #444;
      font-size: 1em;
      width: 860px;
      margin: auto;
    }
    table{
      border-collapse: collapse;
    }
    th {
      border-collapse: collapse;
      border: #444 2px solid;
      margin: 10px;
      padding: 10px;
    }
    td {
      border-collapse: collapse;
      border: #444 2px solid;
      margin: 10px;
      padding: 10px;
    }

  </style> -->
</head>
 
<body> 
 
<nav>
    <div>
      <a href="portada.php">TO-DO Man</a>
    </div>
    
    </div>
  </nav>

  <section>
  
            <h2 class="text-center">To-Do List</h2>
          <table>
            <thead>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
            </thead>
            <tbody>
                          <?php
                          foreach ( $tareas as $tarea) {
                          ?>
                <tr>
                    <td> <?=$tarea['id']?> </td>
                    <td> <?=$tarea['title']?> </td>
                    <td> <?=$tarea['description']?> </td>
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