<!-- AUTOR: Sara El Hasnaoui y Nicolas Cruz -->
<?php
include "vistas/cabecera.php";
include "clases/profesor.php";

$resultado = "";

$primeraAct = new ProfesorPlantilla ("Lola" , "Etxegaray", "14-78451589-75 ", 1000, 500);

$segundaAct = new ProfesorEspecialista ("María", "Behobide" , "18-56895478-56", 1200, 4, 12);

$terceraAct = new ProfesorEspecialista("Anne", "Lekuona", "32-42457412-32",  1550 , 200, 550);

echo "<h4> Profesor Plantilla:  </h4>";
$resultado = $primeraAct ->mostrar();
echo "<h4> Profesor Especialista:  </h4>";
$resultado = $segundaAct ->mostrar();
echo "<h4> Profesor Especialista:  </h4>";
$resultado = $terceraAct ->mostrar();


$cuartaAct = new PruebaPoliformismo();
echo "<h4> Prueba Poliformismo:  </h4>";
$resultado = $cuartaAct::calcular($primeraAct);
$resultado = $cuartaAct::calcular($segundaAct);
$resultado = $cuartaAct::calcular($terceraAct);


$quintaAct = new Departamento();
echo "<h4> Listado Departamentos:  </h4>";
$quintaAct ->addprofesor($primeraAct);
$quintaAct ->addprofesor($segundaAct);
$quintaAct ->addprofesor($terceraAct);

$resultado = $quintaAct->listaProfesores();

echo "<h4> Suma Total Ingresos:  </h4>";
$resultado = $quintaAct->totalIngresos();
include "vistas/pie.php";
?>
