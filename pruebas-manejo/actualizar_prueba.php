<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
<script type="text/javascript">
function procesa()
{

		document.form.action= "procesa_actualizacion_prueba.php";
		document.form.method= "POST";
		document.form.submit(); 
		document.form.enctype="multipart/form-data";  
} 
</script>
</head>
	<?php 
		include('menu.php');
		include('../config/connect.php');	

		$id_prueba = $_POST['id_prueba'];

		$sql_prueba = 'select titulo_prueba, bajada_titulo, glosa_periodistica, periodista, estado_prueba, subtitulo_prueba, target
		from pruebas_manejo where id_prueba = "'.$id_prueba.'"';
		$result_prueba = mysql_query($sql_prueba);
		$array_prueba = mysql_fetch_row($result_prueba);
		$titulo_prueba = $array_prueba[0];
		$bajada_titulo =  $array_prueba[1];
		$glosa_periodistica = $array_prueba[2];
		$periodista = $array_prueba[3];
		$estado_prueba = $array_prueba[4]; 
		$subtitulo_prueba = $array_prueba[5];
		$target = $array_prueba[6];
 
	?> 
	<body>	

		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Actualizaci&oacute;n  de Prueba de Manejo.</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span9">
						<form  name = "form" method="POST" id="myForm" enctype="multipart/form-data">
						<input id="id_prueba" name="id_prueba"  type="hidden" value="<?php echo $id_prueba;?>"/>	
							<div class="form-actions">
								<div id="navmenu">
									<ul>
										<li>
											<div>
												 <label class="description" for="element">T&iacute;tulo de prueba</label> 	
												<input id="titulo_prueba" name="titulo_prueba" class="element text medium" type="text" maxlength="200" value="<?php echo $titulo_prueba;?>" placeholder="Ingrese t&iacute;tulo de prueba"/>
											</div>
										</li>
										<li>
											<div>
												 <label class="description" for="element">Subt&iacute;tulo de prueba</label> 	
												<input id="subtitulo_prueba" name="subtitulo_prueba" class="element text medium" type="text" maxlength="200" value="<?php echo $subtitulo_prueba;?>" placeholder="Ingrese t&iacute;tulo de prueba"/>
											</div>
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Bajada de t&iacute;tulo </label>
											<textarea name="bajada_titulo" id="bajada_titulo" class="input-xxlarge" type="text" maxlength="5000" cols="50" rows="3" value="<?php echo $bajada_titulo;?>"><?php echo $bajada_titulo;?></textarea>	
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Imagen de auto  <span class="label label-warning"><i class="icon-picture icon-white"></i></span></label>
											<input type="file" name="imagen" id="imagen">
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Glosa period&iacute;stica </label>
											<textarea name="glosa" id="glosa" class="input-xxlarge" type="text" maxlength="5000" cols="50" rows="6" value="<?php echo $glosa_periodistica;?>"><?php echo $glosa_periodistica;?></textarea>	
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Nombre del periodista</label>
											<input id="nombre_periodista" name="nombre_periodista" class="element text medium" type="text" maxlength="200" value="<?php echo $periodista;?>" placeholder="Ingrese nombre del periodista"/>
										</li>
										<li>
											<label style="margin-top: 20px; margin-bottom: 20px;" class="description" >Prueba de Manejo en nueva ventana</label>
							<?php
									if($target =='1')
									{ ?>
											<span style="font-size: 12px;">Si </span><input id="target_1" name="target"  type="radio"  value="1" checked/>
											<span style="font-size: 12px;">No </span><input id="target_2" name="target"  type="radio"  value="0"/>
							<?php
									} else
											{  ?>	
											<span style="font-size: 12px;">Si </span><input id="target_1" name="target"  type="radio"  value="1" />
											<span style="font-size: 12px;">No </span><input id="target_2" name="target"  type="radio"  value="0" checked/>	
							<?php			
											}
							?>			
										</li>
										<li>
											<label style="margin-top: 20px; margin-bottom: 20px;" class="description" >Estado de publicaci&oacute;n</label>
							<?php
									if($estado_prueba =='1')
									{ ?>
										<span style="font-size: 12px;">Publicado</span><input id="check_1" name="check"  type="radio"  value="1" checked/>
										<span style="font-size: 12px;">No Publicado</span><input id="check_2" name="check"  type="radio"  value="0"/>
							<?php
									} else
											{  ?>
												<span style="font-size: 12px;">Publicado</span><input id="check_1" name="check"  type="radio"  value="1" />
												<span style="font-size: 12px;">No Publicado</span><input id="check_2" name="check"  type="radio"  value="0" checked/>
							<?php			
											}
							?>
										</li>
									</ul>
								</div>
								<div id="navmenu" style="margin-left: 30px; margin-top: 20px;">
									<ul>
										<li> 
											<input name="enviar" class="btn btn-success" type="button" id="enviar" value="Actualizar Prueba" onclick="procesa()"> 
										</li>
									</ul>
								</div>
							</div>
						</form>
				</div>
			</div>
		</div>
	</body>
</html>