<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_noticias.php">
</head>
	<?php
	include('../config/connect.php');	
	
	function decode($texto)
	{
			$despues = Array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&agrave;','&egrave;','&igrave;','&ograve;','&ugrave;','&Agrave;','&Egrave;','&Igrave;','&Ograve;','&Ugrave;','&atilde;','&otilde;','&acirc;','&ecirc;','&ecirc;','&ocirc;','&ucirc;','&ccedil;','&uuml;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Atilde;','&Otilde;','&Acirc;','&Ecirc;','&Icirc;','&Ocirc;','&Ucirc;','&Ccedil;','&Uuml;','&ntilde;','&Ntilde;','&acute;','&prime;','&lsquo;','&rsquo;','&ldquo;','&rdquo;','&bdquo;','&iquest;','&#63;','&copy;','&reg;','&#153;','&ordm;','&deg;','&ordf;','&sect;','&#161;');
			$antes 	 = Array('�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','\'','�','�','�','�','�','�','?','�','�','�','�','�','�','�','�');
			$nuevo 	 = str_replace($antes,$despues,$texto);
			return $nuevo;
	} 
	
	$id_noticia          =   $_POST['id_noticia'];
	$titulo_noticia 	=   decode($_POST['titulo_noticia']);
	$subtitulo_noticia 	=   decode($_POST['subtitulo_noticia']);
	$bajada_titulo		=	decode($_POST['bajada_titulo']);
	$glosa				=	decode($_POST['glosa']);
	$nombre_periodista	=	decode($_POST['nombre_periodista']);
	$estado 			= 	$_POST['check'];
	$target 			= 	$_POST['target'];

	
	  ////////////// Parte a�adida 1 ////////////// 
	  //array de archivos disponibles
	  $archivos_disp_ar = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/noticias-autos';
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
		

		$sql_noticia = "update  automoviles.noticias set  titulo_noticia = '$titulo_noticia', subtitulo_noticia = '$subtitulo_noticia', bajada_titulo ='$bajada_titulo', 
		glosa_periodistica = '$glosa', periodista ='$nombre_periodista', estado_publicacion = '$estado', target = '$target' where 
		id_noticia = '$id_noticia'";
		mysql_query($sql_noticia);
		
	if($nombre_imagen){
		try
		{
			$sql_imagen_noticia  = 'insert into automoviles.imagenes_noticias (nombre_imagen, id_noticia)values
			("'.$nombre_imagen.'", "'.$id_noticia.'")';
			mysql_query($sql_imagen_noticia);
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al insertar imagen de la noticia '.$titulo_noticia.'.');
		}
	}
	
	mysql_close($conn);  
	?>	
	</body>
</html>