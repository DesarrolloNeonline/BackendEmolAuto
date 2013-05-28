<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_concesionarios.php">
</head>
	<?php
	
	include('../config/connect.php');
	
	$id_concesionario 	=   $_POST['id_concesionario'];
	
	try
	{
		$sql_concesionario  = 'delete from concesionario where id_concesionario = "'.$id_concesionario.'"';
		mysql_query($sql_concesionario);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al eliminnar el Concesionario con ID '.$id_concesionario.'.');
	}
	?>	
	</body>
</html>