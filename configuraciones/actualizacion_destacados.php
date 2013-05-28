<html>
	<head>
		<title>Emol Automoviles</title>
		<link type="text/css" href="bootstrap.min.css" rel="Stylesheet" />
		<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
		<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
<?php 
include ("../head.php"); 
?>
</head>
	<?php
		include('menu.php');
		include('../config/connect.php');
		try 
		{
			$sql1  = 'select nombre_img, url_destino, titulo, sub_titulo, descripcion from 
			automoviles.destacados_home where id_destacado = 0' ;
			
			$query1 = mysql_query($sql1);
			$result_query1 = mysql_fetch_array($query1);
			$nombre_img= $result_query1[0];
			$url_destino= $result_query1[1];
			$titulo= $result_query1[2];
			$sub_titulo= $result_query1[3];
			$descripcion= $result_query1[4];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar primer destacado');
		}
		try 
		{
			$sql2  = 'select nombre_img, url_destino, titulo, sub_titulo, descripcion from 
			automoviles.destacados_home where id_destacado = 1' ;
			
			$query2 = mysql_query($sql2);
			$result_query2 = mysql_fetch_array($query2);
			$nombre_img2= $result_query2[0];
			$url_destino2= $result_query2[1];
			$titulo2= $result_query2[2];
			$sub_titulo2= $result_query2[3];
			$descripcion2= $result_query2[4];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar segundo destacado');
		}
		try
		{
			$sql3  = 'select nombre_img, url_destino, titulo, sub_titulo, descripcion from 
			automoviles.destacados_home where id_destacado = 2' ;
			
			$query3 = mysql_query($sql3);
			$result_query3 = mysql_fetch_array($query3);
			$nombre_img3= $result_query3[0];
			$url_destino3= $result_query3[1];
			$titulo3= $result_query3[2];
			$sub_titulo3= $result_query3[3];
			$descripcion3= $result_query3[4];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar tercer destacado');
		}
	?>
	<body>	
		<div>
			<div>
				<div align=center>
					<h2>Autom&oacute;viles Destacados</h2>
				</div>
			</div>
			<div id="resultado" align="center" class="label" style="height:20px;"></div>
			<div>
				<div align ="center">
				<br>
				<div class='span3' style="width: 300px;margin-left:100px;">
					<h4>Destacado 1</h4>	
					<form id='form_1' class='appnitro'  method='post' enctype='multipart/form-data' action='procesa_destacados.php'>
						<div class='form-actions'>
							<div id='navmenu'>
								<input type='hidden' name='destacado' id="destacado1" value="destacado1">
									<label class='description' > Imagen</label>
									<img src="<?php echo $folder_frontend;?>/upload/destacados-home/<?php echo $nombre_img;?>" height="166" width="130" style ="margin-right: 60px;" />
									<span class="label label-warning" style="margin-left: 150px;"><i class="icon-picture icon-white"></i> 323X203 </span>
									<div> 
										<input type='file' name='imagen' id='imagen'>
									</div>
									</div><br>
									<div> 
										<label class='description' > URL Destino</label>
										<input id='url_destino' name='url_destino' class='element text medium' style="height: 28px;" type='text' maxlength='200' value='<?php echo $url_destino;?>'/>
									</div>
									<div> 
										<label class='description' >Título</label>
										<input id='titulo' name='titulo' class='element text medium' style="height: 28px;" type='text' maxlength='75' value='<?php echo $titulo;?>'/>
									</div>
									<div>
										<label class='description' >SubT&iacute;tulo</label>
										<input id='sub_titulo' name='sub_titulo' class='element text medium' style="height: 28px;" type='text' value='<?php echo $sub_titulo;?>'/>
									
									</div>
									<div>
										<label class='description'>Descripci&oacute;n</label>
										<textarea id='descripcion' name='descripcion' class='element text medium' type='text' maxlength='1000' rows="3"><?php echo $descripcion;?></textarea>
									</div>
									<div id='navmenu'>
										<ul>
											<li>								
												<button class= 'btn btn-success'><i class='icon-pencil icon-white'></i> Guardar </button>
											</li>
										</ul>
									</div>
							</div>
						</div>
					</form>
					</div>
					<div class='span3' style="width: 300px;margin-left:100px;">
					<h4>Destacado 2</h4>
					<form id='form_1' class='appnitro'  method='post' enctype='multipart/form-data' action='procesa_destacados.php'>	
						<div class='form-actions'>
							<div id='navmenu'>
								<input type='hidden' name='destacado' id="destacado2" value="destacado2">
									<label class='description' > Imagen</label>
									<img src="<?php echo $folder_frontend;?>/upload/destacados-home/<?php echo $nombre_img2;?>" height="166" width="130" style ="margin-right: 60px;"/>
									<span class="label label-warning" style="margin-left: 150px;"><i class="icon-picture icon-white"></i> 323X203 </span>
									<div> 
										<input type='file' name='imagen' id='imagen'>
									</div>
									<br>
									<div> 
										<label class='description' > URL Destino</label>
										<input id='url_destino' name='url_destino' class='element text medium' style="height: 28px;" type='text' maxlength='200' value='<?php echo $url_destino2;?>'/>
									</div>
									<div> 
										<label class='description' >Título</label>
										<input id='titulo' name='titulo' class='element text medium' style="height: 28px;" type='text' maxlength='33' value='<?php echo $titulo2;?>'/>
									</div>
									<div>
										<label class='description' >SubT&iacute;tulo</label>
										<input id='sub_titulo' name='sub_titulo' class='element text medium' style="height: 28px;" type='text'  value='<?php echo $sub_titulo2;?>'/>
									
									</div>
									<div>
										<label class='description'>Descripci&oacute;n</label>
										<textarea id='descripcion' name='descripcion' class='element text medium' type='text' maxlength='400' rows="3"><?php echo $descripcion2;?></textarea>
									</div>
									<div id='navmenu'>
										<ul>
											<li>								
												<button class= 'btn btn-success'><i class='icon-pencil icon-white'></i> Guardar </button>
											</li>
										</ul>
									</div>
							</div>
						</div>
					</form>
					</div>
					<div class='span3' style="width: 300px;margin-left:100px;">
					<h4>Destacado 3</h4>
					<form id='form_1' class='appnitro'  method='post' enctype='multipart/form-data' action='procesa_destacados.php'>		
						<div class='form-actions'>
							<div id='navmenu'>
								<input type='hidden' name='destacado' id="destacado3" value="destacado3">
									<label class='description' > Imagen</label>
									<img  src="<?php echo $folder_frontend;?>/upload/destacados-home/<?php echo $nombre_img3;?>" height="166" width="130" style ="margin-right: 60px;"/>
									<span class="label label-warning" style="margin-left: 150px;"><i class="icon-picture icon-white"></i> 323X203 </span>
									<div> 
										<input type='file' name='imagen' id='imagen'>
									</div>
									<br>
									<div> 
										<label class='description' > URL Destino</label>
										<input id='url_destino' name='url_destino' class='element text medium' style="height: 28px;" type='text' maxlength='200' value='<?php echo $url_destino3;?>'/>
									</div>
									<div> 
										<label class='description' >Título</label>
										<input id='titulo' name='titulo' class='element text medium' style="height: 28px;" type='text' maxlength='33' value='<?php echo $titulo3;?>'/>
									</div>
									<div>
										<label class='description' >SubT&iacute;tulo</label>
										<input id='sub_titulo' name='sub_titulo' class='element text medium' style="height: 28px;" type='text'  value='<?php echo $sub_titulo3;?>'/>
									
									</div>
									<div>
										<label class='description'>Descripci&oacute;n</label>
										<textarea id='descripcion' name='descripcion' class='element text medium' type='text' maxlength='400' rows="3"><?php echo $descripcion3;?></textarea>
									</div>
									<div id='navmenu'>
										<ul>
											<li>								
												<button class= 'btn btn-success' ><i class='icon-pencil icon-white'></i> Guardar </button>
											</li>
										</ul>
									</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
