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

    public function getNombre()
    {
        $this->nombre;
    }

    public function getApellido()
    {
        $this->apellido;
    }

    public function getNumeroSegurdidaSocial()
    {
        $this->numeroSeguridadSocial;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setNumeroSeguridadSocial($numeroSeguridadSocial)
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

 
    
}




?>
