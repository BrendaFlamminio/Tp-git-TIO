<?php

class MascotasView
{

  function Mostrar($Titulo, $Veterinarias, $Mascotas){

   ?>

   <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <title><?php echo $Titulo ?></title>
    </head>
    <body>


      <div class="container">

      <ul class="list-group">
        <h3>Veterinarias</h3>
          <?php
          foreach ($Veterinarias as $veterinaria){

                  echo '<li class="list-group-item">'.$veterinaria['id_nombre'].' | '.$veterinaria['direccion'].' | '.$veterinaria['localidad'].' | telefono: '.$veterinaria['contacto'].'  <a href="borrarVeterinaria/'.$veterinaria['id_veterinaria'].'">BORRAR</a></li>';
              }
           ?>
      </ul>


      <ul class="list-group">
        <h3>Mascotas</h3>
          <?php

          foreach ($Mascotas as $mascota){
            $sexo = "hembra";
            if($mascota['sexo']==1){
              $sexo = "macho";
            }
            echo '<li class="list-group-item">'.$mascota['nombre'].' | '.$mascota['tipo'].' | edad: '.$mascota['edad'].' | '.$sexo.' | '.$mascota['id_nombre'].'  <a href="borrarMascota/'.$mascota['id_mascota'].'">BORRAR</a></li>';
              }
           ?>
      </ul>

      </div>
      <div class="container">
        <h2>Ingresar veterinaria</h2>
        <form method="post" action="agregar">
          <div class="form-group">
            <label for="nombreForm">Nombre</label>
            <input type="text" class="form-control" name="nombreForm">
          </div>
          <div class="form-group">
            <label for="contactoForm">Contacto</label>
            <input type="number" class="form-control" name="contactoForm">
          </div>
          <div class="form-group">
            <label for="direccionForm">Direccion</label>
            <input type="text" class="form-control" name="direccionForm">
          </div>
            <div class="form-group">
              <label for="localidadForm">Localidad</label>
              <input type="text" class="form-control" name="localidadForm">

        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div class="container">
        <h2>Ingresar mascota</h2>
        <form method="post" action="agregarMascota">
          <div class="form-group">
            <label for="nombreForm">Nombre</label>
            <input type="text" class="form-control" name="nombreForm">
          </div>
          <div class="form-group">
            <label for="tipoForm">Tipo</label>
            <input type="text" class="form-control" name="tipoForm">
          </div>
          <div class="form-group">
            <label for="edadForm">Edad</label>
            <input type="number" class="form-control" name="edadForm">
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexoForm" id="hembra" value="0">
            <label class="form-check-label" for="hembra">Hembra</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexoForm" id="macho" value="1">
            <label class="form-check-label" for="macho">Macho</label>
          </div>
            <div class="form-group">
              <select class="custom-select" name="nombreVeteForm">
                <option selected>Veterinaria</option>
                <?php
                  foreach ($Veterinarias as $veterinaria){
                  echo '<option value="'.$veterinaria['id_nombre'].'">'.$veterinaria['id_nombre'].'</option>';}
                 ?>
              </select>

        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>

  <?php
  }

}


 ?>
