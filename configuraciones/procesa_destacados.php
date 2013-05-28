<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./actualizacion_destacados.php">
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


	$destacado 	= $_POST["destacado"];
	$url_destino = $_POST["url_destino"];
	$titulo 	= decode($_POST["titulo"]);
	$sub_titulo = decode($_POST["sub_titulo"]);
	$descripcion= decode($_POST["descripcion"]);	

	  ////////////// Parte añadida 1 ////////////// 
	  //array de archivos disponibles
	  $archivos_disp_ar = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/destacados-home/';
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
		$nombre_nuevo = time().'_'.rand(0,100).'.'.$extension;
		//nombre nuevo con la carpeta
		$nombre_nuevo_con_carpeta = $carpeta.$nombre_nuevo;
		//por fin movemos el archivo a la carpeta de imagenes
		$mover_archivos = move_uploaded_file($imagen , $nombre_nuevo_con_carpeta);
		}
	
	
		if($nombre_nuevo)
		{
			if($destacado=='destacado1')
			{

					$sql_destacado1  = 'update automoviles.destacados_home  set  nombre_img = "'.$nombre_nuevo.'", url_destino ="'.$url_destino.'", 
					titulo = "'.$titulo.'", sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'" where id_destacado =0';
					
					mysql_query($sql_destacado1);
				
			}		
			if($destacado=='destacado2')
			{
				
					$sql_destacado2  = 'update automoviles.destacados_home  set  nombre_img = "'.$nombre_nuevo.'", url_destino ="'.$url_destino.'",
					 titulo = "'.$titulo.'", sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'"  where id_destacado =1';
					
					mysql_query($sql_destacado2);
			
			}		
			if($destacado=='destacado3')
			{
			
					$sql_destacado3  = 'update automoviles.destacados_home  set   nombre_img = "'.$nombre_nuevo.'", url_destino ="'.$url_destino.'",
					 titulo = "'.$titulo.'", sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'" where id_destacado =2';
					
					mysql_query($sql_destacado3);
			
			}
	
		}	
			else
					{
						if($destacado=='destacado1')
						{

							$sql_destacado1  = 'update automoviles.destacados_home  set  url_destino ="'.$url_destino.'", titulo = "'.$titulo.'",
							 sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'" where id_destacado =0';
							
							mysql_query($sql_destacado1);
					
						}		
						if($destacado=='destacado2')
						{
					
							$sql_destacado2  = 'update automoviles.destacados_home  set  url_destino ="'.$url_destino.'", titulo = "'.$titulo.'",
							 sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'" where id_destacado =1';
							
							mysql_query($sql_destacado2);
				
						}		
						if($destacado=='destacado3')
						{
				
							$sql_destacado3  = 'update automoviles.destacados_home  set   url_destino ="'.$url_destino.'", titulo = "'.$titulo.'",
							 sub_titulo = "'.$sub_titulo.'", descripcion = "'.$descripcion.'" where id_destacado =2';
							
							mysql_query($sql_destacado3);
				
						}
					}			

mysql_close($conn);	
?>
	</body>
</html>

