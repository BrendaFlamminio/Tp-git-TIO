<?php
require_once "./view/MascotasView.php";
require_once "./model/MascotasModel.php";
class MascotasController
{
  private $model;
  private $view;
  private $Titulo;
  function __construct()
  {
    $this ->model = new MascotasModel();
    $this ->view = new MascotasView();
    $this ->Titulo = "Mascotas en adopcion";
  }
  function Home()
  {
    $Veterinarias = $this ->model -> getVeterinarias();
    $Mascotas = $this ->model -> getMascotas();
    $this ->view -> Mostrar($this ->Titulo, $Veterinarias, $Mascotas);
  }

  function insertVeterinaria()
  {
    $nombre = $_POST["nombreForm"];
    $contacto = $_POST["contactoForm"];
    $direccion = $_POST["direccionForm"];
    $localidad = $_POST["localidadForm"];
    $this ->model ->insertarVeterinaria($nombre, $contacto, $direccion, $localidad );

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function insertMascota(){
    $nombre = $_POST["nombreForm"];
    $tipo = $_POST["tipoForm"];
    $edad = $_POST["edadForm"];
    $sexo = $_POST["sexoForm"];
    $vete = $_POST["nombreVeteForm"];
    $this ->model ->insertarMascota($tipo, $nombre, $edad, $sexo, $vete);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function borrarMascota($params){

    $this->model->deleteMascota($params[0]);

  }

  function borrarVeterinaria($params){
    $this->model->deleteVeterinaria($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
