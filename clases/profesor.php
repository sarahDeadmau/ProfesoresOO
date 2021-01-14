<?php


abstract class Profesor
{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    function __construct($nombre, $apellido, $numeroSeguridadSocial)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

  
    
}




?>
