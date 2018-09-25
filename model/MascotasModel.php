<?php

class MascotasModel
{
 private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
      .'dbname=mascotas;charset=utf8'
      , 'root', '');
  }
  function getMascotas(){
    $sentencia = $this->db ->prepare( "select * from mascota");
    $sentencia->execute();

    return $sentencia -> fetchAll(PDO::FETCH_ASSOC);
  }

  function getVeterinarias(){
    $sentencia = $this->db ->prepare( "select * from veterinaria");
    $sentencia->execute();

    return $sentencia -> fetchAll(PDO::FETCH_ASSOC);
  }

  function insertarVeterinaria($nombre, $contacto, $direccion, $localidad )
  {
    $sentencia = $this->db ->prepare("INSERT INTO veterinaria(id_nombre, direccion, localidad, contacto) VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre,$direccion,$localidad,$contacto));
  }

  function insertarMascota($tipo, $nombre, $edad, $sexo, $vete)
  {
    $sentencia = $this->db ->prepare("INSERT INTO mascota(tipo, nombre, edad, sexo, id_nombre) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($tipo,$nombre,$edad,$sexo,$vete));

  }

  function deleteMascota($id_mascota){

    $sentencia = $this->db->prepare( "delete from mascota where id=?");
    $sentencia->execute(array($id_mascota));
  }

  function deleteVeterinaria($id_veterinaria){

    $sentencia = $this->db ->prepare( "delete from veterinaria where id=?");
    $sentencia->execute(array($id_veterinaria));

  }
}

 ?>
