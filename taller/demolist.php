<?php
require_once 'demoColector.php';
require_once 'conexion.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();




?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo moni class consultar</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                            <td><a href = "formulariodemo.php">crear</a></td>
                        <tr>
                            <th style="text-align:left;">id_demo</th>
                            <th style="text-align:left;">nombre</th>
                            <th style="text-align:left;">foto</th>

                             <th style="text-align:left;">opcion</th>
                             <th style="text-align:left;">opcion</th>



                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_demo(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>  
                            <td><?php echo $r->getFoto(); ?></td>  
			                <td><a href = "formularioactualizar.php?ac=<?php echo $r->getNombre(); ?>&id=<?php echo $r->getId_demo(); ?>">EDITAR</a></td>
                            <td><a href = "borrardemo.php?id=<?php echo $r->getId_demo(); ?>">ELIMINAR</a></td>




                          
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
