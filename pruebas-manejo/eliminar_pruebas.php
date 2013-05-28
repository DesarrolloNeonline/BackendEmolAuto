<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_pruebas.php">
</head>
	<?php
	
	include('../config/connect.php');	
	
	$id_prueba 	=   $_POST['id_prueba'];
	
	try
	{
		$sql_imagenes_prueba  = 'delete from imagenes_pruebas_manejo where id_prueba_manejo = "'.$id_prueba.'"';
		mysql_query($sql_imagenes_prueba);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al eliminnar las imagenes de la prueba de manejo  '.$id_prueba.'.');
	}
	try
	{
		$sql_prueba  = 'delete from pruebas_manejo where id_prueba = "'.$id_prueba.'"';
		mysql_query($sql_prueba);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al eliminnar la prueba de manejor con ID '.$id_prueba.'.');
	}
	
	?>	
	</body>
</html>