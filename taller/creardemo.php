<?php
require_once 'demoColector.php';
require_once 'demo.php';

// Logica


$nombre = $_GET['nombre'];
$ruta="";
$path = $_GET['imagen'];





$alm = new demo();
$model = new demoColector();





$ruta="../foto/";
$ruta=$ruta . $path;


echo "<br>";




						 $model->InsertDEMO($nombre, $ruta);
    




					?>
				<a href = "demolist.php">consultar</a>    
