<?php
require_once 'demoColector.php';
require_once 'demo.php';
require_once 'demolist.php';


$nombre = $_GET['nombre'];
$id = $_GET['id'];

$ruta = "";
$path = $_GET['imagen'];



$alm = new demo();
$model = new demoColector();

$ruta ="../foto/";
$ruta= $ruta . $path;


$model->UpdateDEMO($nombre,$id,$path);

echo "se actualizo registro $nombre, codigo $id , ruta de imagen : $path ejecute la consulta para verificar";
?>

<a href = "demolist.php">consultar</a>    
