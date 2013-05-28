<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_pruebas.php">
</head>
	<?php
	include('../config/connect.php');
	
	function decode($texto)
	{
			$despues = Array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&agrave;','&egrave;','&igrave;','&ograve;','&ugrave;','&Agrave;','&Egrave;','&Igrave;','&Ograve;','&Ugrave;','&atilde;','&otilde;','&acirc;','&ecirc;','&ecirc;','&ocirc;','&ucirc;','&ccedil;','&uuml;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Atilde;','&Otilde;','&Acirc;','&Ecirc;','&Icirc;','&Ocirc;','&Ucirc;','&Ccedil;','&Uuml;','&ntilde;','&Ntilde;','&acute;','&prime;','&lsquo;','&rsquo;','&ldquo;','&rdquo;','&bdquo;','&iquest;','&#63;','&copy;','&reg;','&#153;','&ordm;','&deg;','&ordf;','&sect;','&#161;');
			$antes 	 = Array('á','é','í','ó','ú','à','è','ì','ò','ù','À','È','Ì','Ò','Ù','ã','õ','â','ê','î','ô','û','ç','ü','Á','É','Í','Ó','Ú','Ã','Õ','Â','Ê','Î','Ô','Û','Ç','Ü','ñ','Ñ','´','\'','‘','’','“','”','„','¿','?','©','®','™','º','°','ª','§','¡');
			$nuevo 	 = str_replace($antes,$despues,$texto);
			return $nuevo;
	} 
	
	$titulo_prueba 		=   decode($_POST['titulo_prueba']);
	$subtitulo_prueba   =   decode($_POST['subtitulo_prueba']);
	$bajada_titulo		=	decode($_POST['bajada_titulo']);
	$glosa				=	decode($_POST['glosa']);
	$nombre_periodista	=	decode($_POST['nombre_periodista']);
	$date   			= 	date('Y-m-d');
	$estado 			= 	$_POST['estado'];
	$target             =   $_POST['target'];
	
	  ////////////// Parte añadida 1 ////////////// 
	  //array de archivos disponibles
	  $archivos_disp_ar = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/pruebas-manejo/';
	  //recibimos el campo de imagen
	  $imagen = $_FILES['imagen']['tmp_name'];
	  //guardamos el nombre original de la imagen en una variable
	  $nombrebre_orig = $_FILES['imagen']['name'];
	  //el proximo codigo es para ver que extension es la imagen
	  $array_nombre = explode('.',$nombrebre_orig);
	  $cuenta_arr_nombre = count($array_nombre);
	  $extension = strtolower($array_nombre[--$cuenta_arr_nombre]);

	  //validamos la extension
	  if(!in_array($extension, $archivos_disp_ar)) $error = 'Este tipo de archivo no es permitido';

	  if(empty($error)){

		//creamos nuevo nombre para que tenga nombre unico
		$nombre_imagen = time().'_'.rand(0,100).'.'.$extension;
		//nombre nuevo con la carpeta
		$nombre_nuevo_con_carpeta = $carpeta.$nombre_imagen;
		//por fin movemos el archivo a la carpeta de imagenes
		$mover_archivos = move_uploaded_file($imagen , $nombre_nuevo_con_carpeta);
		}

	try
	{
		$sql_prueba_manejo  = "insert into automoviles.pruebas_manejo (titulo_prueba, subtitulo_prueba, bajada_titulo, glosa_periodistica, periodista, 
		fecha_prueba, estado_prueba, target) values('".$titulo_prueba."', '".$subtitulo_prueba."', '".$bajada_titulo."', '".$glosa."', 
		'".$nombre_periodista."', DATE_FORMAT('".$date."','%Y-%m-%d'),'".$estado."', '".$target."')";
		mysql_query($sql_prueba_manejo);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al insertar prueba de manejo '.$titulo_prueba.'.');
	}
	try
	{
		$sql_maxid_manejo  = 'select MAX(id_prueba) from  automoviles.pruebas_manejo';
		$result_maxid_manejo = mysql_query($sql_maxid_manejo);
		$array_maxid = mysql_fetch_row($result_maxid_manejo);
		$id_max_pruebamanejo = $array_maxid[0];

	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al seleccionar  ID m&aacute;ximo.');
	}
	try
	{
		$sql_imagen_prueba  = 'insert into automoviles.imagenes_pruebas_manejo (imagen_prueba, id_prueba_manejo)values
		("'.$nombre_imagen.'", "'.$id_max_pruebamanejo.'")';
		mysql_query($sql_imagen_prueba);
	}
	catch(PDOException $e) 
	{
		error_log($e->getMessage());
		die('Error al insertar prueba de manejo '.$titulo_prueba.'.');
	}
	
	mysql_close($conn);  
	?>	
	</body>
</html>