<html>
<head>
<title>Emol Automoviles </title>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./listar_concesionarios.php">
</head>
	<body>
<?php
	include('../config/connect.php');
	
	function decode($texto)
	{
			$despues = Array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&agrave;','&egrave;','&igrave;','&ograve;','&ugrave;','&Agrave;','&Egrave;','&Igrave;','&Ograve;','&Ugrave;','&atilde;','&otilde;','&acirc;','&ecirc;','&ecirc;','&ocirc;','&ucirc;','&ccedil;','&uuml;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Atilde;','&Otilde;','&Acirc;','&Ecirc;','&Icirc;','&Ocirc;','&Ucirc;','&Ccedil;','&Uuml;','&ntilde;','&Ntilde;','&acute;','&prime;','&lsquo;','&rsquo;','&ldquo;','&rdquo;','&bdquo;','&iquest;','&#63;','&copy;','&reg;','&#153;','&ordm;','&deg;','&ordf;','&sect;','&#161;');
			$antes 	 = Array('á','é','í','ó','ú','à','è','ì','ò','ù','À','È','Ì','Ò','Ù','ã','õ','â','ê','î','ô','û','ç','ü','Á','É','Í','Ó','Ú','Ã','Õ','Â','Ê','Î','Ô','Û','Ç','Ü','ñ','Ñ','´','\'','‘','’','“','”','„','¿','?','©','®','™','º','°','ª','§','¡');
			$nuevo 	 = str_replace($antes,$despues,$texto);
			return $nuevo;
	}
	

	$id_concesionario				=  	$_POST['id_concesionario'];
	$rut							=   $_POST['rut'];
	$local 							=   $_POST['local'];
	$bp_concesionario 				=   $_POST['bp-concesionario'];
	$nombre_razonsocial		    	=	decode($_POST['nombre_razonsocial']);
	$nombre_fantasia				=   decode($_POST['nombre_fantasia']);
	$tipo 							=   $_POST['tipo'];
	$encargado                      =   decode($_POST['encargado']);
	$email 							=   $_POST['email'];
	$telefono						=	$_POST['telefono'];
	$telefono_adicional 			=   $_POST['telefono_adicional'];
	$comuna							=	$_POST['comuna'];
	$comuna_replace                 =   decode($comuna);
	$calle							=	$_POST['calle'];
	$calle_replace                  =   decode($calle);
	$numero							=	$_POST['numero'];
	$ciudad 						=   $_POST['ciudad'];
	$ciudad_replace                 =   decode($ciudad);
	$prioridad						=   $_POST['prioridad'];
	$latitud 						=   $_POST['latitud'];
	$longitud 						=   $_POST['longitud'];
	$checko							= 	$_POST['checko'];


	 // Upload imagen_logo_chico  to Server 

	  $archivos_disp_ar_chico = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/concesionarios/';
	  //recibimos el campo de imagen
	  $imagen_chica = $_FILES['imagen_logo_chico']['tmp_name'];
	  //guardamos el nombre original de la imagen en una variable
	  $nombrebre_orig_chica = $_FILES['imagen_logo_chico']['name'];
	  //el proximo codigo es para ver que extension es la imagen
	  $array_nombre_chica = explode('.',$nombrebre_orig_chica);
	  $cuenta_arr_nombre_chica = count($array_nombre_chica);
	  $extension_chica = strtolower($array_nombre_chica[--$cuenta_arr_nombre_chica]);

	  //validamos la extension
	  if(!in_array($extension_chica, $archivos_disp_ar_chico)) $error_chica = 'Este tipo de archivo no es permitido';

	  if(empty($error_chica)){

		//creamos nuevo nombre para que tenga nombre unico
		$imagen_logo_chico= 'imagen_logo_chico'.'_'.time().'_'.rand(0,100).'.'.$extension_chica;
		//nombre nuevo con la carpeta
		$nombre_nuevo_con_carpeta_chica = $carpeta.$imagen_logo_chico;
		//por fin movemos el archivo a la carpeta de imagenes
		$mover_archivos_chica = move_uploaded_file($imagen_chica , $nombre_nuevo_con_carpeta_chica);
		}

	// Upload imagen_logo_grande  to Server

	  $archivos_disp_ar_grande = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/concesionarios/';
	  //recibimos el campo de imagen
	  $imagen_grande = $_FILES['imagen_logo_grande']['tmp_name'];
	  //guardamos el nombre original de la imagen en una variable
	  $nombrebre_orig_grande = $_FILES['imagen_logo_grande']['name'];
	  //el proximo codigo es para ver que extension es la imagen
	  $array_nombre_grande = explode('.',$nombrebre_orig_grande);
	  $cuenta_arr_nombre_grande = count($array_nombre_grande);
	  $extension_grande = strtolower($array_nombre_grande[--$cuenta_arr_nombre_grande]);

	  //validamos la extension
	  if(!in_array($extension_grande, $archivos_disp_ar_grande)) $error_grande = 'Este tipo de archivo no es permitido';

	  if(empty($error_grande)){

		//creamos nuevo nombre para que tenga nombre unico
		$imagen_logo_grande = 'imagen_logo_grande'.'_'.time().'_'.rand(0,100).'.'.$extension_grande;
		//nombre nuevo con la carpeta
		$nombre_nuevo_con_carpeta_grande = $carpeta.$imagen_logo_grande;
		//por fin movemos el archivo a la carpeta de imagenes
		$mover_archivos_grande = move_uploaded_file($imagen_grande , $nombre_nuevo_con_carpeta_grande);
		}

  	// Upload imagen_sucursal  to Server

	  $archivos_disp_ar_sucursal = array('jpg', 'jpeg', 'gif', 'png');
	  //carpteta donde vamos a guardar la imagen
	  $carpeta = $folder_web.'/upload/concesionarios/';
	  //recibimos el campo de imagen
	  $imagen_sucursal = $_FILES['imagen_sucursal']['tmp_name'];
	  //guardamos el nombre original de la imagen en una variable
	  $nombrebre_orig_sucursal = $_FILES['imagen_sucursal']['name'];
	  //el proximo codigo es para ver que extension es la imagen
	  $array_nombre_sucursal = explode('.',$nombrebre_orig_sucursal);
	  $cuenta_arr_nombre_sucursal = count($array_nombre_sucursal);
	  $extension_sucursal = strtolower($array_nombre_sucursal[--$cuenta_arr_nombre_sucursal]);

	  //validamos la extension
	  if(!in_array($extension_sucursal, $archivos_disp_ar_sucursal)) $error_sucursal = 'Este tipo de archivo no es permitido';

	  if(empty($error_sucursal)){

		//creamos nuevo nombre para que tenga nombre unico
		$imagen_concesionario = 'imagen_sucursal'.'_'.time().'_'.rand(0,100).'.'.$extension_sucursal;
		//nombre nuevo con la carpeta
		$nombre_nuevo_con_carpeta_sucursal = $carpeta.$imagen_concesionario;
		//por fin movemos el archivo a la carpeta de imagenes
		$mover_archivos_sucursal = move_uploaded_file($imagen_sucursal , $nombre_nuevo_con_carpeta_sucursal);
		}

	if($checko)
	{

			$calle = str_replace("Ã±","n",$calle);
			$calle = str_replace("á","a",$calle);
			$calle = str_replace("é","e",$calle);
			$calle = str_replace("ó","o",$calle);
			$calle = str_replace("ú","u",$calle);
			$calle = str_replace("í","i",$calle);
			$calle = str_replace("ñ","n",$calle);
			$calle = str_replace("Ñ","N",$calle);
			$ciudad = str_replace("Ã±","n",$ciudad);
			$ciudad = str_replace("á","a",$ciudad);
			$ciudad = str_replace("é","e",$ciudad);
			$ciudad = str_replace("ó","o",$ciudad);
			$ciudad = str_replace("ú","u",$ciudad);
			$ciudad = str_replace("í","i",$ciudad);
			$ciudad = str_replace("ñ","n",$ciudad);
			$ciudad = str_replace("Ñ","N",$ciudad);
			$comuna = str_replace("Ã±","n",$comuna);
			$comuna = str_replace("á","a",$comuna);
			$comuna = str_replace("é","e",$comuna);
			$comuna = str_replace("ó","o",$comuna);
			$comuna = str_replace("ú","u",$comuna);
			$comuna = str_replace("í","i",$comuna);
			$comuna = str_replace("ñ","n",$comuna);
			$comuna = str_replace("Ñ","N",$comuna);
			
			$client = new SoapClient("http://ws.mapas.neonline.cl/webservices_mapas.php?wsdl");
			$ws_response=($client->getDireccionG($ciudad." ".$comuna." ".$calle." ".$numero));
			$xml = simplexml_load_string($ws_response);
			foreach ($xml->xpath('//HIT') as $hit)
			{
				$latitud = $hit->LATITUD;
				$longitud = $hit->LONGITUD;
			}


			$sql_concesionario  = 'update  automoviles.concesionario set calle = "'.$calle_replace.'", numero ="'.$numero	.'", comuna = "'.$comuna_replace.'",
			ciudad = "'.$ciudad_replace .'" , telefono = "'.$telefono.'", telefono_adicional ="'.$telefono_adicional.'", prioridad = "'.$prioridad.'", encargado = "'.$encargado.'", email_concesionario = "'.$email.'",
			bp_concesionario = "'.$bp_concesionario.'", latitud = "'.$latitud.'", longitud = "'.$longitud .'", RUT ="'.$rut.'", local ="'.$local.'",
			nombre_razonsocial="'.$nombre_razonsocial.'", nombre_fantasia = "'.$nombre_fantasia.'", tipo = "'.$tipo.'" where id_concesionario = "'.$id_concesionario.'"';
			mysql_query($sql_concesionario);


			if($imagen_logo_chico){
				$sql_logo_chico  = 'update  automoviles.concesionario set logo_chico = "'.$imagen_logo_chico.'" where id_concesionario = "'.$id_concesionario.'"';
				mysql_query($sql_logo_chico);
			}

			if($imagen_logo_grande){
				$sql_logo_grande  = 'update  automoviles.concesionario set logo_grande = "'.$imagen_logo_grande.'" where id_concesionario = "'.$id_concesionario.'"';
				mysql_query($sql_logo_grande);
			}

			if($imagen_concesionario){
				$sql_imagen_sucursal = 'update  automoviles.concesionario set imagen_concesionario = "'.$imagen_concesionario.'" where id_concesionario = "'.$id_concesionario.'"';
				mysql_query($sql_imagen_sucursal);
			}
			




	}	else
				{
					$sql_concesionario  = 'update  automoviles.concesionario set calle = "'.$calle_replace.'", numero ="'.$numero	.'", comuna = "'.$comuna_replace.'",
					ciudad = "'.$ciudad_replace .'" , telefono = "'.$telefono.'", telefono_adicional ="'.$telefono_adicional.'", prioridad = "'.$prioridad.'", encargado = "'.$encargado.'", email_concesionario="'.$email.'", 
					bp_concesionario = "'.$bp_concesionario.'", latitud = "'.$latitud.'", longitud = "'.$longitud .'", RUT ="'.$rut.'", local ="'.$local.'",
					nombre_razonsocial="'.$nombre_razonsocial.'", nombre_fantasia="'.$nombre_fantasia.'", tipo = "'.$tipo.'" where id_concesionario = "'.$id_concesionario.'"';
					mysql_query($sql_concesionario);

					if($imagen_logo_chico){
					$sql_logo_chico  = 'update  automoviles.concesionario set logo_chico = "'.$imagen_logo_chico.'" where id_concesionario = "'.$id_concesionario.'"';
					mysql_query($sql_logo_chico);
					}

					if($imagen_logo_grande){
						$sql_logo_grande  = 'update  automoviles.concesionario set logo_grande = "'.$imagen_logo_grande.'" where id_concesionario = "'.$id_concesionario.'"';
						mysql_query($sql_logo_grande);
					}

					if($imagen_sucursal){
						$sql_imagen_sucursal = 'update  automoviles.concesionario set imagen_concesionario = "'.$imagen_sucursal.'" where id_concesionario = "'.$id_concesionario.'"';
						mysql_query($sql_imagen_sucursal);
					}
				}
	
	mysql_close($conn);	
?>	
	</body>
</html>