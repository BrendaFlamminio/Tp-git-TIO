<?php
function Conectar(){
  return new PDO('mysql:host=localhost;'
    .'dbname=usuarios;charset=utf8'
    , 'root', '');
}

function Registro(){
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $usuario = $_POST["usuario"];
      $contraseña = $_POST["contraseña"];
      $telefono = $_POST["telefono"];
      $fechaNacimiento = $_POST["fechaNacimiento"];
      $ciudad = $_POST["ciudad"];

      $db = Conectar();
      $sentencia = $db->prepare("INSERT INTO usuario(nombre, apellido, usuario, contraseña, telefono, fechaNacimiento, ciudad) VALUES(?,?,?,?,?,?,?)");
      $sentencia->execute(array($nombre,$apellido,$usuario,$contraseña,$telefono,$fechaNacimiento,$ciudad ));
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }

    function getUsuarios(){
      $db = Conectar();
      $sentencia = $db->prepare( "select * from usuario");
      $sentencia->execute();

      return $sentencia -> fetchAll(PDO::FETCH_ASSOC);
    }
?>
