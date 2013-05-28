<?php //include ('seguridad.php');?>
<html>
<head>
<title>Emol Automoviles </title>
<?php 
		//if ($_SESSION['autentificado'] == 'publicador'){ ?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./../index.php">
<?php			//}?>
<?php 
			//if ($_SESSION['autentificado'] == 'ejecutivo'){ ?>
				<!--<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./../home.php"> </head>!-->
<?php	//	}?>	
</head>
	<?php
	include('../config/connect.php');
	
	$destacado_1	=	$_POST['destacado-1'];	
	$destacado_2	=	$_POST['destacado-2'];
	$destacado_3	=	$_POST['destacado-3'];
	$destacado_4	=	$_POST['destacado-4'];
	$destacado_5	=	$_POST['destacado-5'];
	$destacado_6	=	$_POST['destacado-6'];
	


	try
	{

		$sql_eliminar = 'update concesionario set estado = "0"';
		mysql_query($sql_eliminar);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al eliminar destacados');
	}


	try
	{
		$sql_destacado_1  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_1.'" where id_destacado = 1';
		mysql_query($sql_destacado_1);

		$sql_concesionario_1 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_1.'"';
		mysql_query($sql_concesionario_1);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar primer destacado');
	}
	try
	{
		$sql_destacado_1  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_1.'" where id_destacado = 1';
		mysql_query($sql_destacado_1);

		$sql_concesionario_1 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_1.'"';
		mysql_query($sql_concesionario_1);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar primer destacado');
	}
	try
	{
		$sql_destacado_2  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_2.'" where id_destacado = 2';
		mysql_query($sql_destacado_2);

		$sql_concesionario_2 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_2.'"';
		mysql_query($sql_concesionario_2);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar segundo destacado');
	}
	try
	{
		$sql_destacado_3  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_3.'" where id_destacado = 3';
		mysql_query($sql_destacado_3);

		$sql_concesionario_3 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_3.'"';
		mysql_query($sql_concesionario_3);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar tercer destacado');
	}
	try
	{
		$sql_destacado_4  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_4.'" where id_destacado = 4';
		mysql_query($sql_destacado_4);

		$sql_concesionario_4 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_4.'"';
		mysql_query($sql_concesionario_4);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar cuarto destacado');
	}
	try
	{
		$sql_destacado_5  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_5.'" where id_destacado = 5';
		mysql_query($sql_destacado_5);

		$sql_concesionario_5 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_5.'"';
		mysql_query($sql_concesionario_5);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar quinto destacado');
	}
	try
	{
		$sql_destacado_6  = 'update concesionarios_destacados set bp_concesionario = "'.$destacado_6.'" where id_destacado = 6';
		mysql_query($sql_destacado_6);

		$sql_concesionario_6 = 'update concesionario set estado = "1" where bp_concesionario = "'.$destacado_6.'"';
		mysql_query($sql_concesionario_6);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar sexto destacado');
	}
mysql_close($conn);       		
	?>	
	</body>
</html>