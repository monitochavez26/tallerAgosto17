<?php
require_once 'demoColector.php';
require_once 'demo.php';
require_once 'demolist.php';
$id = $_GET['id'];
$alm = new demo();
$model = new demoColector();

$model->DeleteDEMO($id);

?>
<a href = "demolist.php">consultar</a> 

