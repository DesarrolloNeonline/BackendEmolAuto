<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
<script src="../js/jquery.js" type="text/javascript"></script> 
<script src="../js/jquery.Rut.js" type="text/javascript"></script>
<script type="text/javascript">
function solonumeros(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /\d/;  // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
} 
</script>
<script>
    $( document ).ready(function() {
       $('#rut').Rut({
	  on_error: function(){ alert('El RUT ingresado es incorrecto'); },
	  format_on: 'keyup'
	});
    });
</script>
<script>
function validacion(){

	var ExpRegular = /(\w+)(\.?)(\w*)(\@{1})(\w+)(\.?)(\w*)(\.{1})(\w{2,3})/;

	if (document.form.rut.value.length==0)
	{
		alert("Ingrese RUT")
		document.form.rut.focus()
		return 0;
	} 
	if (document.form.bp_concesionario.value.length==0)
	{
		alert("Ingrese bp concesionario")
		document.form.bp_concesionario.focus()
		return 0;
	} 
	if (document.form.nombre_razonsocial.value.length==0)
	{
		alert("Ingrese nombre de razon social")
		document.form.nombre_razonsocial.focus()
		return 0;
	} 
	if (document.form.encargado.value.length==0)
	{
		alert("Ingrese encargado")
		document.form.encargado.focus()
		return 0;
	} 

	document.form.action= "procesa_concesionario.php";
	document.form.method= "POST";
	document.form.submit(); 
	document.form.enctype="multipart/form-data";  
}
</script>
</head>
	<?php 
		require_once 'menu.php';
		include('../config/connect.php');
	?>
	<body>	
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Creaci&oacute;n  Concesionarios.</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13">
						<form  name = "form" action="procesa_concesionario.php" method="POST" id="myForm" enctype="multipart/form-data">
							<div class="form-actions">
												<div id="navmenu">
													<ul>
														<li>
															<div>
																 <label class="description" for="element">RUT</label> 	
																<input id="rut" name="rut[]" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese RUT"/>
															</div>
														</li>
														<li>
															<div>
																 <label class="description" for="element">Local</label> 	
																<input id="local" name="local[]" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese local" onkeypress="return solonumeros(event)"/>
															</div>
														</li>
														<li>
															<div>
																 <label class="description" for="element">BP Concesionario</label> 	
																<input id="bp_concesionario" name="bp_concesionario[]" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese codigo SAP" onkeypress="return solonumeros(event)"/>
															</div>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Nombre de Raz&oacute;n Social </label>
															<input id="nombre_razonsocial" name="nombre_razonsocial[]" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese nombre de razon social"/>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Nombre de Fantas&iacute;a </label>
															<input id="nombre_fantasia" name="nombre_fantasia[]" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese nombre de fantasia"/>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Logo-chico<span class="label label-warning"><i class="icon-picture icon-white"></i>  100x75  </span></label>
															<input type="file" name="imagen_logo_chico" id="imagen_logo_chico">
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Logo-grande<span class="label label-warning"><i class="icon-picture icon-white"></i>  136x102  </span></label>
															<input type="file" name="imagen_logo_grande" id="imagen_logo_grande">
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Concesionario <span class="label label-warning"><i class="icon-picture icon-white"></i>  220x165  </span></label>
															<input type="file" name="imagen_sucursal" id="imagen_sucursal">
														</li>
													</ul>
												</div>
												<div id="navmenu">
													<ul>
														<li>
															<label class="description" for="element">Tipo</label>
															<select name="tipo[]">';
																<option value="Casa Matriz">Casa Matriz</option>
																<option value="Sucursal">Sucursal</option>
															</select> 
														</li>
														<li>
															<label class="description" for="element">Encargado</label> 
															<input id="encargado" name="encargado[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese encargado" value=""/><br>
														</li>
														<li>
															<label class="description" for="element">E-mail del Concesionario</label> 
															<input id="email" name="email[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese email del concesionario" value=""/><br>
														</li>
														<li>
															<label class="description" for="element">Tel&eacute;fono de Contacto</label>
															<input id="telefono" name="telefono[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese telefono" value="" onkeypress="return solonumeros(event)"/><br>
														</li>
														<li>
															<label class="description" for="element">Tel&eacute;fono adicional de Contacto</label>
															<input id="telefono_adicional" name="telefono_adicional[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese telefono adicional" value="" onkeypress="return solonumeros(event)"/><br>
														</li>
														<li>
															<label class="description" for="element">Direcci&oacute;n del Concesionario</label>
															<input id="ciudad" name="ciudad[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese ciudad" value=""/>

															<input id="comuna" name="comuna[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese comuna" value=""/>

															<input id="calle" name="calle[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese calle" value=""/> 
															
															<input id="numero" name="numero[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese n&uacute;mero" value="" onkeypress="return solonumeros(event)"/> 
														</li>
													</ul>
												</div>	
												<div id="navmenu">
												<ul>
													<li> 
														<label class="description" for="element">Prioridad</label> 	
															<select name="prioridad[]">';
															<option value="">Seleccione prioridad</option>
												<?php		
												$max = 100;
															for($i=1;$i<=$max;$i++)
															{ ?>
															<option value="<?php echo $i;?>"><?php echo $i;?></option>
												<?php		} ?>
															</select>
													</li>
												</ul>
											</div>	
											</td>
										</tr>
									</table>	
							<br><br>	
								<div id="navmenu" style="margin-left: 240px;">
									<ul>
										<li> 
											<input name="enviar"  class= "btn btn-success" type="button" class="BUTTON" id="enviar" value="Guardar Concesionario" onclick="validacion()">			
										</li>
									</ul>
								</div>
							</div>
						</form>
				</div>
			</div>
		</div>
<?php	
	mysql_close($conn);	?> 
	</body>
</html>