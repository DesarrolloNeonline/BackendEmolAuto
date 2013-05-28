<?php
	include('../config/connect.php'); 
	
	function decode($texto)
	{
			$despues = Array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&agrave;','&egrave;','&igrave;','&ograve;','&ugrave;','&Agrave;','&Egrave;','&Igrave;','&Ograve;','&Ugrave;','&atilde;','&otilde;','&acirc;','&ecirc;','&ecirc;','&ocirc;','&ucirc;','&ccedil;','&uuml;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Atilde;','&Otilde;','&Acirc;','&Ecirc;','&Icirc;','&Ocirc;','&Ucirc;','&Ccedil;','&Uuml;','&ntilde;','&Ntilde;','&acute;','&prime;','&lsquo;','&rsquo;','&ldquo;','&rdquo;','&bdquo;','&iquest;','&#63;','&copy;','&reg;','&#153;','&ordm;','&deg;','&ordf;','&sect;','&#161;');
			$antes 	 = Array('á','é','í','ó','ú','à','è','ì','ò','ù','À','È','Ì','Ò','Ù','ã','õ','â','ê','î','ô','û','ç','ü','Á','É','Í','Ó','Ú','Ã','Õ','Â','Ê','Î','Ô','Û','Ç','Ü','ñ','Ñ','´','\'','‘','’','“','”','„','¿','?','©','®','™','º','°','ª','§','¡');
			$nuevo 	 = str_replace($antes,$despues,$texto);
			return $nuevo;
	} 
	
	$rut							=   $_POST['rut'];
	$rut                        	=   str_replace("-", "", $rut);
	$rut                        	=   str_replace(".", "", $rut);
	$local  						=   $_POST['local'];
	$bp_concesionario 				=   $_POST['bp_concesionario'];
	$nombre_razonsocial		   		=	decode($_POST['nombre_razonsocial']);
	$nombre_fantasia                =   decode($_POST['nombre_fantasia']);
	$tipo 							=   $_POST['tipo'];
	$encargado                      =   decode($_POST['encargado']);
	$email							=   $_POST['email'];
	$telefono						=	$_POST['telefono'];
	$telefono_adicional             =   $_POST['telefono_adicional'];
	$comuna							=	$_POST['comuna'];
	$comuna_replace                 =   decode($comuna);
	$calle							=	$_POST['calle'];
	$calle_replace                  =   decode($calle);
	$numero							=	$_POST['numero'];
	$ciudad 						=   $_POST['ciudad'];
	$ciudad_replace                 =   decode($ciudad);
	$prioridad						=   $_POST['prioridad'];
	$count 							=   count($comuna);
	 
	  
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

		
	for($i=0;$i<$count;$i++)
	{
		if($ciudad[$i]!='')
		{

			$calle[$i] = str_replace("Ã±","n",$calle[$i]);
			$calle[$i] = str_replace("á","a",$calle[$i]);
			$calle[$i] = str_replace("é","e",$calle[$i]);
			$calle[$i] = str_replace("ó","o",$calle[$i]);
			$calle[$i] = str_replace("ú","u",$calle[$i]);
			$calle[$i] = str_replace("í","i",$calle[$i]);
			$calle[$i] = str_replace("ñ","n",$calle[$i]);
			$calle[$i] = str_replace("Ñ","N",$calle[$i]);
			$ciudad[$i] = str_replace("Ã±","n",$ciudad[$i]);
			$ciudad[$i] = str_replace("á","a",$ciudad[$i]);
			$ciudad[$i] = str_replace("é","e",$ciudad[$i]);
			$ciudad[$i] = str_replace("ó","o",$ciudad[$i]);
			$ciudad[$i] = str_replace("ú","u",$ciudad[$i]);
			$ciudad[$i] = str_replace("í","i",$ciudad[$i]);
			$ciudad[$i] = str_replace("ñ","n",$ciudad[$i]);
			$ciudad[$i] = str_replace("Ñ","N",$ciudad[$i]);
			$comuna[$i] = str_replace("Ã±","n",$comuna[$i]);
			$comuna[$i] = str_replace("á","a",$comuna[$i]);
			$comuna[$i] = str_replace("é","e",$comuna[$i]);
			$comuna[$i] = str_replace("ó","o",$comuna[$i]);
			$comuna[$i] = str_replace("ú","u",$comuna[$i]);
			$comuna[$i] = str_replace("í","i",$comuna[$i]);
			$comuna[$i] = str_replace("ñ","n",$comuna[$i]);
			$comuna[$i] = str_replace("Ñ","N",$comuna[$i]);
			
			$client = new SoapClient("http://ws.mapas.neonline.cl/webservices_mapas.php?wsdl");
			$ws_response=($client->getDireccionG($ciudad[$i]." ".$comuna[$i]." ".$calle[$i]." ".$numero[$i]));
			$xml = simplexml_load_string($ws_response);
			foreach ($xml->xpath('//HIT') as $hit)
			{
				$latitud = $hit->LATITUD;
				$longitud = $hit->LONGITUD;
			}


			$sql_concesionario = 'insert into automoviles.concesionario (id_concesionario, RUT, local, bp_concesionario, nombre_razonsocial, nombre_fantasia,
			tipo, encargado, email_concesionario, telefono, telefono_adicional, ciudad, comuna, calle, numero, latitud, longitud, prioridad, logo_chico, logo_grande, imagen_concesionario) values("", "'.$rut[$i].'", 
			"'.$local[$i].'","'.$bp_concesionario[$i].'", "'.$nombre_razonsocial[$i].'", "'.$nombre_fantasia[$i].'", "'.$tipo[$i].'", "'.$encargado[$i].'", "'.$email[$i].'", "'.$telefono[$i].'", "'.$telefono_adicional[$i].'", "'.$ciudad_replace[$i].'", 
			"'.$comuna_replace[$i].'", "'.$calle_replace[$i].'", "'.$numero[$i].'","'.$latitud.'", "'.$longitud.'", "'.$prioridad[$i].'", "'.$imagen_logo_chico.'",
			"'.$imagen_logo_grande.'","'.$imagen_concesionario .'")';
			
			mysql_query($sql_concesionario);
		} 

			else {
					$sql_concesionario = 'insert into automoviles.concesionario (id_concesionario, RUT, local, bp_concesionario, nombre_razonsocial, nombre_fantasia,
					tipo, encargado, email_concesionario, telefono, telefono_adicional, prioridad, logo_chico, logo_grande, imagen_concesionario) values("", "'.$rut[$i].'", 
					"'.$local[$i].'","'.$bp_concesionario[$i].'", "'.$nombre_razonsocial[$i].'","'.$nombre_fantasia[$i].'","'.$tipo[$i].'", "'.$encargado[$i].'", "'.$email[$i].'", "'.$telefono[$i].'", "'.$telefono_adicional[$i].'", "'.$prioridad[$i].'", 
					"'.$imagen_logo_chico.'","'.$imagen_logo_grande.'","'.$imagen_concesionario .'")';
					
					mysql_query($sql_concesionario);
				 }
			
		  
	}	
	
	mysql_close($conn);	
?>	

<html>
<head>
<?php 
	require_once '../head.php';
?>	
<title>Emol Automoviles </title>
</head>
	<body>
<?php
			require_once 'menu.php';
		include('../config/connect.php');
	?>
	<body>	
		<div id="content">
			<div id="formulario">
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13" style="width: 100%;">
							<div class="form-actions">
								<div id="navmenu" style="margin-left: 240px;">
									<ul>
										<li> 
											<a href="crear_concesionarios.php" class= 'btn btn-success'>Crear Concesionario</a>
										</li>
										<li> 
											<a href="../index.php" class= 'btn btn-success'>Salir de Modulo Concesionarios</a>
										</li>
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>