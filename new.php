<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="main.css">
  <title>TO-DO Man</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid col-auto">
      <a class="navbar-brand" href="portada.php">TO-DO Man</a>
    </div>
    
    </div>
  </nav>

<section>
<form>
<div class="container-fluid col-6">

  <div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control margin-bootom-sm" id="inputEmail3" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10 text-center">
      <button type="submit" class="btn btn-primary">Insert</button>
    </div>
  </div>
</form>
</div>


</section>

</body>