<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'MascotasController#Home',
      'home'=> 'MascotasController#Home',
      'agregar'=> 'MascotasController#insertVeterinaria',
      'agregarMascota'=> 'MascotasController#insertMascota',
      'borrarMascota'=> 'MascotasController#borrarMascota',
      'borrarVeterinaria'=> 'MascotasController#borrarVeterinaria'
    ];

}

 ?>
