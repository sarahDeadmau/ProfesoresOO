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

   abstract public function ingresos();

   public function mostrar()
    {
        echo "<br />" . " Esta emplead@ " . ($this->nombre);
        echo " " . ($this->apellido);
        echo " con el NSS: " . ($this->numeroSeguridadSocial);
         echo "<br />" . " Los ingresos " . ($this-> ingresos());

    }
    
}


class ProfesorPlantilla extends Profesor
{
    private $sueldo;
    private $dietas;

    function __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas)
    {
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
       
        
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }


    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
        
    }


    public function setDietas($dietas)
    {
        $this->dietas = $dietas;
        
    }
    public function getDietas()
    {
        return $this->dietas;
    }


    public function mostrar()
    {
        echo parent::mostrar();
    
        
    }

    public function ingresos()
    {
      return   $this->sueldo + $this->dietas;
    }
}


class ProfesorEspecialista extends Profesor
{
    private $horas;
    private $tarifa;
    private $base;

    function __construct($nombre, $apellido, $numeroSeguridadSocial, $base, $horas, $tarifa)
    {

        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->base = $base;
        $this->horas = $horas;
        $this->tarifas = $tarifa;
    }

    public function getHoras()
    {
        return $this->horas;
    }

    public function getTarifa()
    {
        return $this->tarifa;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setHoras($horas)
    {
        $this->horas = $horas;
        
    }

    public function setTarifas($tarifa)
    {
        $this->tarifa = $tarifa;
        
    }

    public function setBase($base)
    {
        $this->base = $base;
        
    }

    function mostrar()
    {
        echo parent::mostrar();
        
    }

    function ingresos()
    {
        return $this->base +  $this->horas * $this->tarifa;
     /* return ($this->base +  $this->horas) * $this->tarifa;*/
    }
}


class Departamento{
    private $departamento = [];
    function addprofesor($profe){
        array_push($this->departamento, $profe);
    }
   function listaProfesores(){
    $lista = "";
    foreach($this->departamento as $value){
        $lista .= "Esta emplead@ " . $value->getNombre() . " " . $value->getApellido() .
        "Con el NSS: " . $value->getNumeroSegurdidaSocial();
    }
    return $lista;
   }

  
}

class PruebaPoliformismo{
    public static function calcular($profe){
        echo "</br>";
        echo "Los ingresos" . $profe-> getApellido() . " son " . $profe-> ingresos();
    }
}

?>