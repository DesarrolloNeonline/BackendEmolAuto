<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_noticias.php">
</head>
	<?php
	
	include('../config/connect.php');	
	
	$id_noticia 	=   $_POST['id_noticia'];
	
	try
	{
		$sql_imagenes_noticia  = 'delete from imagenes_noticias where id_noticia = "'.$id_noticia.'"';
		mysql_query($sql_imagenes_noticia);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al eliminnar las imagenes de la noticia  '.$id_noticia.'.');
	}
	try
	{
		$sql_noticia = 'delete from noticias where id_noticia = "'.$id_noticia.'"';
		mysql_query($sql_noticia);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al eliminnar la noticia con ID '.$id_noticia.'.');
	}
	
	?>	
	</body>
</html>