<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
</head>
	<?php 
		require_once 'menu.php';
		include('../config/connect.php'); 
		
		try 
		{
			$sql_destacado_1  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 1';
			$result_destacado_1 = mysql_query($sql_destacado_1);
			$array_destacado_1 = mysql_fetch_array($result_destacado_1);
			$bp_concesionario_1 =  $array_destacado_1[0];

			$sql_concesionario_1  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_1.'"';
			$result_concesionario_1 = mysql_query($sql_concesionario_1);
			$array_concesionario_1 = mysql_fetch_array($result_concesionario_1);
			$nombre_concesionario_1 = $array_concesionario_1[0];
			$rut_1 				    = $array_concesionario_1[1];
			$local_1					= $array_concesionario_1[2];
		    $logo_1 				= $array_concesionario_1[3];

		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar primer destacado');
		}
		try 
		{
			$sql_destacado_2  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 2';
			$result_destacado_2 = mysql_query($sql_destacado_2);
			$array_destacado_2 = mysql_fetch_array($result_destacado_2);
			$bp_concesionario_2 =  $array_destacado_2[0];

			$sql_concesionario_2  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_2.'"';
			$result_concesionario_2 = mysql_query($sql_concesionario_2);
			$array_concesionario_2 = mysql_fetch_array($result_concesionario_2);
			$nombre_concesionario_2 = $array_concesionario_2[0];
			$rut_2 				    = $array_concesionario_2[1];
			$local_2				= $array_concesionario_2[2];
		    $logo_2 				= $array_concesionario_2[3];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar segundo destacado 2');
		}
		try
		{
			$sql_destacado_3  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 3';
			$result_destacado_3 = mysql_query($sql_destacado_3);
			$array_destacado_3 = mysql_fetch_array($result_destacado_3);
			$bp_concesionario_3 =  $array_destacado_3[0];

			$sql_concesionario_3  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_3.'"';
			$result_concesionario_3 = mysql_query($sql_concesionario_3);
			$array_concesionario_3 = mysql_fetch_array($result_concesionario_3);
			$nombre_concesionario_3 = $array_concesionario_3[0];
			$rut_3 				    = $array_concesionario_3[1];
			$local_3				= $array_concesionario_3[2];
		    $logo_3				= $array_concesionario_3[3];
		

		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar tercer destacado 3');
		}
		try
		{
			$sql_destacado_4  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 4';
			$result_destacado_4 = mysql_query($sql_destacado_4);
			$array_destacado_4 = mysql_fetch_array($result_destacado_4);
			$bp_concesionario_4 =  $array_destacado_4[0];

			$sql_concesionario_4  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_4.'"';
			$result_concesionario_4 = mysql_query($sql_concesionario_4);
			$array_concesionario_4 = mysql_fetch_array($result_concesionario_4);
			$nombre_concesionario_4 = $array_concesionario_4[0];
			$rut_4 				    = $array_concesionario_4[1];
			$local_4				= $array_concesionario_4[2];
		    $logo_4				= $array_concesionario_4[3];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar cuarto destacado 4');
		}
		try
		{
			$sql_destacado_5  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 5';
			$result_destacado_5 = mysql_query($sql_destacado_5);
			$array_destacado_5 = mysql_fetch_array($result_destacado_5);
			$bp_concesionario_5 =  $array_destacado_5[0];

			$sql_concesionario_5  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_5.'"';
			$result_concesionario_5 = mysql_query($sql_concesionario_5);
			$array_concesionario_5 = mysql_fetch_array($result_concesionario_5);
			$nombre_concesionario_5 = $array_concesionario_5[0];
			$rut_5 				    = $array_concesionario_5[1];
			$local_5				= $array_concesionario_5[2];
		    $logo_5				= $array_concesionario_5[3];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar quinto destacado');
		}
		try
		{
			$sql_destacado_6  = 'select bp_concesionario from concesionarios_destacados where id_destacado = 6';
			$result_destacado_6 = mysql_query($sql_destacado_6);
			$array_destacado_6 = mysql_fetch_array($result_destacado_6);
			$bp_concesionario_6 =  $array_destacado_6[0];

			$sql_concesionario_6  = 'select nombre_fantasia, RUT, local, logo_chico from automoviles.concesionario where bp_concesionario="'.$bp_concesionario_6.'"';
			$result_concesionario_6 = mysql_query($sql_concesionario_6);
			$array_concesionario_6 = mysql_fetch_array($result_concesionario_6);
			$nombre_concesionario_6 = $array_concesionario_6[0];
			$rut_6 				    = $array_concesionario_6[1];
			$local_6				= $array_concesionario_6[2];
		    $logo_6				= $array_concesionario_6[3];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar sexto destacado');
		}

		try
		{
			$sql_concesionarios_1  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_1 = mysql_query($sql_concesionarios_1);
			$max_concesionario_1   = mysql_num_rows($result_concesionarios_1);
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios , destacados 1');
		}
		try
		{
			$sql_concesionarios_2  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_2 = mysql_query($sql_concesionarios_2);
			$max_concesionario_2   = mysql_num_rows($result_concesionarios_2);
			
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios, destacados2');
		}
		try
		{
			$sql_concesionarios_3  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_3 = mysql_query($sql_concesionarios_3);
			$max_concesionario_3   = mysql_num_rows($result_concesionarios_3);
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios, destacados 3');
		}
		try
		{
			$sql_concesionarios_4  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_4 = mysql_query($sql_concesionarios_4);
			$max_concesionario_4   = mysql_num_rows($result_concesionarios_4);
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios, destacados 4');
		}
		try
		{
			$sql_concesionarios_5  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_5 = mysql_query($sql_concesionarios_5);
			$max_concesionario_5   = mysql_num_rows($result_concesionarios_5);
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios, destacados 5');
		}
		try
		{
			$sql_concesionarios_6  = 'select nombre_fantasia, bp_concesionario, RUT, local from concesionario';
			$result_concesionarios_6 = mysql_query($sql_concesionarios_6);
			$max_concesionario_6   = mysql_num_rows($result_concesionarios_6);
			
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar concesionarios, destacados 6');
		}



	?>
	<body>	
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Actualizaci&oacute;n de Concesionarios Destacados</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13">
					<form  name = "form" action="procesa_destacado.php" method="POST" id="myForm" enctype="multipart/form-data">
					<div class="form-actions">
						<div id="navmenu">
											<div>
												 <label class="description" for="element">Concesionarios Destacados</label><br> 	
											</div>
											<div>
												<strong>Concesionario -1</strong>


												<select name="destacado-1" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_1;?>"><?php echo $nombre_concesionario_1.' '.$rut_1.'-'.$local_1;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_1;$i++)
													{ 
															$array_concesionarios_1= mysql_fetch_array($result_concesionarios_1);
															$nombre_fantasia_1  =  $array_concesionarios_1[0];
															$bp_concesionario_1 = $array_concesionarios_1[1];
															$rut_1 			  =	$array_concesionarios_1[2];
															$local_1 			  =	$array_concesionarios_1[3];
															?>
															<option value="<?php echo $bp_concesionario_1;?>"><?php echo $nombre_fantasia_1.' '.$rut_1.'-'.$local_1;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_1;?>" />
												<strong><?php echo $nombre_concesionario_1;?> </strong><strong><?php echo $rut_1.$local_1;?></strong>
											</div>
											<div>
												<strong>Concesionario -2</strong>
												<select name="destacado-2" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_2;?>"><?php echo $nombre_concesionario_2.' '.$rut_2.'-'.$local_2;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_2;$i++)
													{ 
															$array_concesionarios_2= mysql_fetch_array($result_concesionarios_2);
															$nombre_fantasia_2  =  $array_concesionarios_2[0];
															$bp_concesionario_2 = $array_concesionarios_2[1];
															$rut_2 			  =	$array_concesionarios_2[2];
															$local_2 			  =	$array_concesionarios_2[3];
															?>
															<option value="<?php echo $bp_concesionario_2;?>"><?php echo $nombre_fantasia_2.' '.$rut_2.'-'.$local_2;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_2;?>" />
												<strong><?php echo $nombre_concesionario_2;?> </strong><strong><?php echo $rut_2.$local_2;?></strong>
											</div>
											<div>
												<strong>Concesionario -3</strong>
												<select name="destacado-3" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_3;?>"><?php echo $nombre_concesionario_3.' '.$rut_3.'-'.$local_3;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_3;$i++)
													{ 
															$array_concesionarios_3= mysql_fetch_array($result_concesionarios_3);
															$nombre_fantasia_3  =  $array_concesionarios_3[0];
															$bp_concesionario_3 = $array_concesionarios_3[1];
															$rut_3 			  =	$array_concesionarios_3[2];
															$local_3 			  =	$array_concesionarios_3[3];
															?>
															<option value="<?php echo $bp_concesionario_3;?>"><?php echo $nombre_fantasia_3.' '.$rut_3.'-'.$local_3;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_3;?>" />
												<strong><?php echo $nombre_concesionario_3;?> </strong><strong><?php echo $rut_3.$local_3;?></strong>
											</div>
											<div>
												<strong>Concesionario -4</strong>
												<select name="destacado-4" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_4;?>"><?php echo $nombre_concesionario_4.' '.$rut_4.'-'.$local_4;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_4;$i++)
													{ 
															$array_concesionarios_4= mysql_fetch_array($result_concesionarios_4);
															$nombre_fantasia_4  =  $array_concesionarios_4[0];
															$bp_concesionario_4 = $array_concesionarios_4[1];
															$rut_4 			  =	$array_concesionarios_4[2];
															$local_4 			  =	$array_concesionarios_4[3];
															?>
															<option value="<?php echo $bp_concesionario_4;?>"><?php echo $nombre_fantasia_4.' '.$rut_4.'-'.$local_4;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_4;?>" />
												<strong><?php echo $nombre_concesionario_4;?> </strong><strong><?php echo $rut_4.$local_4;?></strong>
											</div>
											<div>
												<strong>Concesionario -5</strong>
												<select name="destacado-5" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_5;?>"><?php echo $nombre_concesionario_5.' '.$rut_5.'-'.$local_5;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_5;$i++)
													{ 
															$array_concesionarios_5= mysql_fetch_array($result_concesionarios_5);
															$nombre_fantasia_5  =  $array_concesionarios_5[0];
															$bp_concesionario_5 = $array_concesionarios_5[1];
															$rut_5 			  =	$array_concesionarios_5[2];
															$local_5 			  =	$array_concesionarios_5[3];
															?>
															<option value="<?php echo $bp_concesionario_5;?>"><?php echo $nombre_fantasia_5.' '.$rut_5.'-'.$local_5;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_5;?>" />
												<strong><?php echo $nombre_concesionario_5;?> </strong><strong><?php echo $rut_5.$local_5;?></strong>
											</div>
											<div>
												<strong>Concesionario -6</strong>
												<select name="destacado-6" style="width:300px;">';
															<option value="<?php echo $bp_concesionario_6;?>"><?php echo $nombre_concesionario_6.' '.$rut_6.'-'.$local_6;?></option>
												<?php		
										
													for($i=0;$i<$max_concesionario_6;$i++)
													{ 
															$array_concesionarios_6= mysql_fetch_array($result_concesionarios_6);
															$nombre_fantasia_6  =  $array_concesionarios_6[0];
															$bp_concesionario_6 = $array_concesionarios_6[1];
															$rut_6 			  =	$array_concesionarios_6[2];
															$local_6 			  =	$array_concesionarios_6[3];
															?>
															<option value="<?php echo $bp_concesionario_6;?>"><?php echo $nombre_fantasia_6.' '.$rut_6.'-'.$local_6;?></option>
												<?php		
														} ?>
												</select>
												<img style="width: 117px; height: 50px;margin-left: 20px;" src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_6;?>" />
												<strong><?php echo $nombre_concesionario_6;?> </strong><strong><?php echo $rut_6.$local_6;?></strong>
											</div>
						</div>
						<div id="navmenu" style="margin-top:40px">
							<ul>
								<li> 
									<button type='submit' style="margin-left: 130px;" class= 'btn btn-success' name='submit' value =''>Guardar</button>
								</li>
							</ul>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
<?php	
	mysql_close($conn);	?> 
	</body>
</html>