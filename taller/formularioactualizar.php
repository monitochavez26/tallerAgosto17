<?php
$ac = $_GET['ac'];
$id = $_GET['id'];
echo "$ac,$id";
?>

<!DOCTYPE hmtl>



<html>

	<head>

	<title>formulario actualizar</title>

	</head>

	 

	<body>

	<form id="formulario" action="actualizar.php" method="get">

	   
	  <h3>                     Actualizacion de datos</h3> 

    <p>id: <input type="text" name="id" value = <?php echo $id ?>></p>

 <p>Nombre: <input type="text" name="nombre" /></p>

<label for="imagen">Imagen:</label>
<input type="file" id="nombre" name="imagen" />
 
 <p><input type="submit" name="guardar" value ="guardar"></p>
</form>

    

	</form>


	    





	</body>

</html>


