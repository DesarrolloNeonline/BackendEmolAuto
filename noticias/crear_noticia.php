<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
<script type="text/javascript">
function procesa()
{
		if (document.form.titulo_noticia.value.length==0)
		{
			alert("Falta titulo de noticia")
			document.form.titulo_noticia.focus()
			return 0;
		} 

		if (document.form.subtitulo_noticia.value.length==0)
		{
			alert("Falta subtitulo noticia")
			document.form.subtitulo_noticia.focus()
			return 0;
		}
		
		if (document.form.bajada_titulo.value.length==0)
		{
			alert("Falta bajada de titulo")
			document.form.bajada_titulo.focus()
			return 0;
		} 
		if (document.form.imagen.value.length==0)
		{
			alert("Falta ingresar imagen")
			document.form.imagen.focus()
			return 0;
		} 
		if (document.form.glosa.value==0)
		{
			alert("Falta ingresar la glosa")
			document.form.glosa.focus()
			return 0;
		} 
		if (document.form.nombre_periodista.value==0)
		{
			alert("Falta ingresar nombre del periodista")
			document.form.nombre_periodista.focus()
			return 0;
		}

		document.form.action= "procesa_noticia.php";
		document.form.method= "POST";
		document.form.submit(); 
		document.form.enctype="multipart/form-data";  
} 
</script>
</head>
	<?php 
		require_once 'menu.php';
	?>
	<body>	
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Creaci&oacute;n  de Noticia.</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span9">
						<form  name = "form"  method="POST" id="myForm" enctype="multipart/form-data">
							<div class="form-actions">
								<div id="navmenu">
									<ul>
										<li>
											<div>
												 <label class="description" for="element">T&iacute;tulo de noticia</label> 	
												<input id="titulo_noticia" name="titulo_noticia" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese t&iacute;tulo de noticia"/>
											</div>
										</li>
										<li>
											<div>
												 <label class="description" for="element">Subt&iacute;tulo  de noticia</label> 	
												<input id="subtitulo_noticia" name="subtitulo_noticia" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese t&iacute;tulo de noticia"/>
											</div>
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Bajada de t&iacute;tulo </label>
											<textarea name="bajada_titulo" id="bajada_titulo" class="input-xxlarge" type="text" maxlength="5000" cols="50" rows="3" value="" placeholder="Ingrese bajada de t&iacute;tulo de noticia"></textarea>	
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Imagen de auto  <span class="label label-warning"><i class="icon-picture icon-white"></i></span></label>
											<input type="file" name="imagen" id="imagen">
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Glosa period&iacute;stica </label>
											<textarea name="glosa" id="glosa" class="input-xxlarge" type="text" maxlength="5000" cols="50" rows="6" value="" placeholder="Ingrese glosa period&iacute;stica de noticia"></textarea>	
										</li>
										<li>
											<label style="margin-top: 20px;" class="description" >Nombre del periodista</label>
											<input id="nombre_periodista" name="nombre_periodista" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese nombre del periodista"/>
										</li>
										<li>
											<label style="margin-top: 20px; margin-bottom: 20px;" class="description" >Noticia en nueva ventana</label>
											
											<span style="font-size: 12px;">Si </span><input id="target_1" name="target"  type="radio"  value="1" checked/>
											<span style="font-size: 12px;">No </span><input id="target_2" name="target"  type="radio"  value="0"/>
										</li>
										<li>
											<label style="margin-top: 20px; margin-bottom: 20px;" class="description" >Estado de publicaci&oacute;n</label>
											
											<span style="font-size: 12px;">Publicado </span><input id="check_1" name="estado"  type="radio"  value="1" checked/>
											<span style="font-size: 12px;">No Publicado </span><input id="check_2" name="estado"  type="radio"  value="0"/>
										</li>
									</ul>
								</div>
								<div id="navmenu" style="margin-left: 30px; margin-top: 20px;">
									<ul>
										<li> 
											<input name="enviar" class="btn btn-success" type="button" id="enviar" value="Guardar Noticia" onclick="procesa()"> 
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