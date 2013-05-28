<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
<script src="../js/jquery.js" type="text/javascript"></script> 
<script src="../js/jquery.Rut.js" type="text/javascript"></script>

<script language="javascript">
			function addRow(tableID) {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				var row = table.insertRow(rowCount);
				var colCount = table.rows[0].cells.length;
				for(var i=0; i<colCount; i++) {
					var newcell = row.insertCell(i);
					newcell.innerHTML = table.rows[0].cells[i].innerHTML;
					//alert(newcell.childNodes);
					switch(newcell.childNodes[0].type) {
						case "text":
								newcell.childNodes[0].value = "";
								break;
						case "checkbox":
								newcell.childNodes[0].checked = false;
								break;
						case "select-one":
								newcell.childNodes[0].selectedIndex = 0;
								break;
					}
				}
			}
			function deleteRow(tableID) {
				try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
					for(var i=0; i<rowCount; i++) {
						var row = table.rows[i];
						var chkbox = row.cells[0].childNodes[0]; 
					}
					if(rowCount > 1){
						table.deleteRow(rowCount-1);
						rowCount--;
						i--;
					}
				}
				catch(e) {
					alert(e);
				}
			}
		</script>
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
function checkvalidate(checks) {
    for (i = 0; lcheck = checks[i]; i++) {
        if (lcheck.checked) {
            return true;
        }
    }
    return false;
}


function procesa(){

    var latitud = document.getElementById('latitud');
    var longitud = document.getElementById('longitud');
    
	if (document.frm1.checko.checked) 
	{

		latitud.readOnly = true; 
        longitud.readOnly = true; 
  	}

	 else 
		{
			latitud.readOnly = false; 
            longitud.readOnly = false; 
         }
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
</head>
	<?php 
		require_once 'menu.php';
		include('../config/connect.php');
	?>
	<body>	
<?php

$id_concesionario = $_POST['id_concesionario'];



$consulta_concesionario= 'select  id_concesionario, RUT, local, bp_concesionario, nombre_razonsocial, nombre_fantasia, logo_chico,  imagen_concesionario, 
tipo, encargado, email_concesionario, telefono, telefono_adicional, ciudad, comuna, calle, numero, latitud, longitud, prioridad, estado, logo_grande from 
automoviles.concesionario  where id_concesionario ="'.$id_concesionario.'"';

$result_concesionario = mysql_query($consulta_concesionario);
$array_concesionario=mysql_fetch_row($result_concesionario);
$id_concesionario = $array_concesionario[0];
$rut = $array_concesionario[1];
$local = $array_concesionario[2];
$bp_concesionario = $array_concesionario[3];
$nombre_razonsocial = $array_concesionario[4];
$nombre_fantasia    = $array_concesionario[5];
$logo_chico = $array_concesionario[6];
$imagen_concesionario = $array_concesionario[7];
$tipo = $array_concesionario[8];
$encargado = $array_concesionario[9];
$email    =  $array_concesionario[10];
$telefono = $array_concesionario[11];
$telefono_adicional = $array_concesionario[12];
$ciudad  = $array_concesionario[13];
$comuna  = $array_concesionario[14];
$calle  = $array_concesionario[15];
$numero =  $array_concesionario[16];
$latitud = $array_concesionario[17];
$longitud = $array_concesionario[18];
$prioridad = $array_concesionario[19];
$estado= $array_concesionario[20];
$logo_grande = $array_concesionario[21];

?>
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Actualizaci&oacute;n de Concesionario.</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13">
						<form  name = "frm1"  id ="frm1" action="procesa_actualizacion_concesionario.php" method="POST"  enctype="multipart/form-data">
							<input type="hidden" name="id_concesionario" value="<?php echo $id_concesionario?>"/>
							<div class="form-actions">
									<div id="navmenu">
													<ul>
														<li>
															<div>
																 <label class="description" for="element">RUT</label> 	
																<input id="rut" name="rut" class="element text medium" type="text" maxlength="200" value="<?php echo $rut;?>" placeholder="Ingrese RUT" onkeypress="return solonumeros(event)"/>
															</div>
														</li>
														<li>
															<div>
																 <label class="description" for="element">Local</label> 	
																<input id="local" name="local" class="element text medium" type="text" maxlength="200" value="<?php echo $local;?>" placeholder="Ingrese local" onkeypress="return solonumeros(event)"/>
															</div>
														</li>
														<li>
															<div>
																 <label class="description" for="element">BP Concesionario</label> 	
																<input id="bp-concesionario" name="bp-concesionario" class="element text medium" type="text" maxlength="200" value="<?php echo $bp_concesionario;?>" placeholder="Ingrese bp concesionario" onkeypress="return solonumeros(event)"/>
															</div>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Nombre de Raz&oacute;n Social</label>
															<input id="nombre_razonsocial" name="nombre_razonsocial" class="element text medium" type="text" maxlength="200" value="<?php echo $nombre_razonsocial;?>" placeholder="Ingrese nombre razon social"/>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Nombre de Fantas&iacute;a</label>
															<input id="nombre_fantasia" name="nombre_fantasia" class="element text medium" type="text" maxlength="200" value="<?php echo $nombre_fantasia;?>" placeholder="Ingrese nombre de fantasia"/>
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Logo-chico<span class="label label-warning"><i class="icon-picture icon-white"></i>  100x75  </span></label>
															<?php
																if($logo_chico){ ?>
																	<img src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_chico;?>"><br>
														<?php		}
																	else {
																		 echo '<span class="label label-info">No existe logo chico.</span>';
																	} ?>
															<input type="file" name="imagen_logo_chico" id="imagen_logo_chico">
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Logo-grande<span class="label label-warning"><i class="icon-picture icon-white"></i>  136x102  </span></label>
															<?php
																if($logo_grande){ ?>
																	<img src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo_grande;?>"><br>
														<?php		}
																	else {
																		 echo '<span class="label label-info">No existe logo grande.</span>';
																	} ?>
															<input type="file" name="imagen_logo_grande" id="imagen_logo_grande">		
														</li>
														<li>
															<label style="margin-top: 20px;" class="description" >Imagen Concesionario <span class="label label-warning"><i class="icon-picture icon-white"></i>  220x165  </span></label>
															
															<?php
																if($imagen_concesionario){ ?>
																	<img src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $imagen_concesionario;?>"><br>
														<?php		}
																	else {
																		 echo '<span class="label label-info">No existe imagen de concesionario.</span>';
																	} ?>
															<input type="file" name="imagen_sucursal" id="imagen_sucursal">
														</li>
													</ul>
												</div>
												<div id="navmenu">
													<ul>
														<li>
															<label class="description" for="element">Tipo</label>
															<select name="tipo">
																<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
																<option value="Casa Matriz">Casa Matriz</option>
																<option value="Sucursal">Sucursal</option>
															</select> 
														</li>
														<li>
															<label class="description" for="element">Encargado</label> 
															<input id="encargado" name="encargado" class="element text medium" type="text" maxlength="150" placeholder="Ingrese encargado" value="<?php echo $encargado;?>"/><br>
														</li>
														<li>
															<label class="description" for="element">E-mail del Concesionario</label> 
															<input id="email" name="email" class="element text medium" type="text" maxlength="150" placeholder="Ingrese email del concesionario" value="<?php echo  $email;?>"/><br>
														</li>
														<li>
															<label class="description" for="element">Tel&eacute;fono de Contacto</label>
															<input id="telefono" name="telefono" class="element text medium" type="text" maxlength="150" placeholder="Ingrese telefono" value="<?php echo  $telefono;?>" onkeypress="return solonumeros(event)"/><br>
														</li>
														<li>
															<label class="description" for="element">Tel&eacute;fono adicional de Contacto</label>
															<input id="telefono_adicional" name="telefono_adicional" class="element text medium" type="text" maxlength="150" placeholder="Ingrese telefono adicional" value="<?php echo  $telefono_adicional;?>" onkeypress="return solonumeros(event)"/><br>
														</li>
														<li>
															<label class="description" for="element">Direcci&oacute;n del Concesionario</label>
															<input id="ciudad" name="ciudad" class="element text medium" type="text" maxlength="150" placeholder="Ingrese ciudad" value="<?php echo $ciudad;?>"/>

															<input id="comuna" name="comuna" class="element text medium" type="text" maxlength="150" placeholder="Ingrese comuna" value="<?php echo $comuna;?>"/>

															<input id="calle" name="calle" class="element text medium" type="text" maxlength="150" placeholder="Ingrese calle" value="<?php echo $calle;?>"/> 
													
															<input id="numero" name="numero" class="element text medium" type="text" maxlength="150" placeholder="Ingrese n&uacute;mero" value="<?php echo $numero;?>" onkeypress="return solonumeros(event)"/> 
														</li>
													</ul>
												</div>

												<div id="navmenu">
													<ul>
														<li>
															<label class="checkbox">Georreferenciaci&oacuten automatica
															<input id="checko" name="checko" onclick="procesa();" checked  class="element text medium" type="checkbox" maxlength="150" placeholder="Ingrese latitud" value="1"/>
															</label>
														</li>
													</ul>
												</div>		
												<div id="navmenu">
													<ul>	
														<li>
															<label class="description" for="element">Latitud y Longitud</label>
															<input id="latitud" name="latitud"  class="element text medium" type="text" maxlength="150" readonly="readonly" placeholder="Ingrese latitud" value="<?php echo  $latitud;?>"/>

															<input id="longitud" name="longitud" class="element text medium" type="text" maxlength="150" readonly="readonly" placeholder="Ingrese longitud" value="<?php echo $longitud;?>"/>

														</li>
													</ul>
												</div>		
												<div id="navmenu">
												<ul>
													<li> 
														<label class="description" for="element">Prioridad</label> 	
															<select name="prioridad">';
															<option value="<?php echo $prioridad;?>"><?php echo $prioridad;?></option>
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
								<br><br>	
								<div id="navmenu" style="margin-left: 240px;">
									<ul>
										<li> 
											<button type='submit' class= 'btn btn-success' name='submit' value =''>Actualizar Concesionario</button>
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