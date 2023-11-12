<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Encuesta</title>
  </head>
  <body>
  <div class="wrapper">
    <div class="form-box login">
      <h2 class="mb-5">Encuesta</h2>
      <?php include "controller/c_pri.php"; ?>
      <form method="post">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input id="nombre" name="nombre" type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" name="email" type="email" class="form-control">
        </div>
        <div class="mb-3">
          <label for="sexo" class="form-label">Sexo</label>
          <select id="sexo" name="sexo" class="form-select" aria-label="Default select example">
            <option selected>Selecciona una opcion</option>
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
        <button value="siguiente" name="btnsig" type="submit" class="btn btn-primary">SIGUIENTE</button>
      </form>

    </div>
  </div>
      
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
