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

	function decode($texto){
			$despues = Array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&agrave;','&egrave;','&igrave;','&ograve;','&ugrave;','&Agrave;','&Egrave;','&Igrave;','&Ograve;','&Ugrave;','&atilde;','&otilde;','&acirc;','&ecirc;','&ecirc;','&ocirc;','&ucirc;','&ccedil;','&uuml;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Atilde;','&Otilde;','&Acirc;','&Ecirc;','&Icirc;','&Ocirc;','&Ucirc;','&Ccedil;','&Uuml;','&ntilde;','&Ntilde;','&acute;','&prime;','&lsquo;','&rsquo;','&ldquo;','&rdquo;','&bdquo;','&iquest;','&#63;','&copy;','&reg;','&#153;','&ordm;','&deg;','&ordf;','&sect;','&#161;');
			$antes 	 = Array('á','é','í','ó','ú','à','è','ì','ò','ù','À','È','Ì','Ò','Ù','ã','õ','â','ê','î','ô','û','ç','ü','Á','É','Í','Ó','Ú','Ã','Õ','Â','Ê','Î','Ô','Û','Ç','Ü','ñ','Ñ','´','\'','‘','’','“','”','„','¿','?','©','®','™','º','°','ª','§','¡');
			$nuevo 	 = str_replace($antes,$despues,$texto);
			return $nuevo;
	} 
	include('../config/connect.php'); 
	
	$menu1							=	decode($_POST['menu-1']);	
	$menu_direccionamiento_1		=	$_POST['menu-direccionamiento-1'];
	$menu2							=	decode($_POST['menu-2']);
	$menu_direccionamiento_2		=	$_POST['menu-direccionamiento-2'];
	$menu3							=	decode($_POST['menu-3']);
	$menu_direccionamiento_3		=	$_POST['menu-direccionamiento-3'];
	$menu4							=	decode($_POST['menu-4']);
	$menu_direccionamiento_4		=	$_POST['menu-direccionamiento-4'];
	
	try
	{
		$sql_menu1  = 'update nav_menu set name_menu = "'.$menu1.'", url ="'.$menu_direccionamiento_1.'" where id = 1';
		mysql_query($sql_menu1);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar primer campo');
	}
	try
	{
		$sql_menu2  = 'update nav_menu set name_menu = "'.$menu2.'", url ="'.$menu_direccionamiento_2.'" where id = 2';
		mysql_query($sql_menu2);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar segundo campo');
	}
	try
	{
		$sql_menu3  = 'update nav_menu set name_menu = "'.$menu3.'", url ="'.$menu_direccionamiento_3.'" where id = 3';
		mysql_query($sql_menu3);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar tercer campo');
	}
	try
	{
		$sql_menu4  = 'update nav_menu set name_menu = "'.$menu4.'", url ="'.$menu_direccionamiento_4.'" where id = 4';
		mysql_query($sql_menu4);
	}
	catch(PDOException $e) 
	{
			error_log($e->getMessage());
			die('Error al actualizar cuarto campo');
	}e		
	?>	
	</body>
</html>