<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
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
</head>
	<?php 
		require_once 'menu.php';
		require_once 'connect.php'; 
	?>
	<body>	
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Creaci&oacute;n de Concesionario.</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13">
					<form  name = "form" action="procesa_crear.php" method="POST" id="myForm" enctype="multipart/form-data">
					<div class="form-actions">
								<div id="navmenu">
									<ul>
										<li>
											<div>
												 <label class="description" for="element">Informaci&oacute;n del Concesionario</label> 	
												<input id="concesionario" name="concesionario" class="element text medium" type="text" maxlength="200" value="" placeholder="Ingrese nombre del concesionario"/>
											</div>
										</li>
										<li>
										<label style="margin-top: 20px;" class="description" >Imagen  <span class="label label-warning"><i class="icon-picture icon-white"></i>  160x70  </span></label>
									     <input type="file" name="imagen" id="imagen">
										</li>
									</ul>
								</div>
								<br>
								<label class="description" for="element">Socursales</label> 	
								<!--Formulario de direcciones    -->
							<table id="dataTable_direction">
								<tr>
									<td>
										<hr WIDTH="100%" COLOR="#000" SIZE="4">
											<div id="navmenu">
												<ul>
													<li>
														<input id="comuna" name="comuna[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese comuna" value=""/>

														<input id="calle" name="calle[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese calle" value=""/> 
														
														<input id="numero" name="numero[]" class="element text medium" type="text" maxlength="150" placeholder="Ingrese n&uacute;mero" value=""/> 
													</li>
												</ul>
											</div>	
									</td>
								</tr>
							</table>	
							<table>
									<tr>
										<td>
											<div   class= "btn btn-success"  value="Agregar Fila" onclick="addRow('dataTable_direction')">Agregar Socursal</div>
										</td>
										<td>
											<div   style="margin-left: 15px;" class= "btn btn-success"  value="Agregar Fila" onclick="deleteRow('dataTable_direction')">Eliminar Socursal</div>
										</td>
									</tr>
							</table>
							<br><br>	
								<div id="navmenu" style="margin-left: 240px;">
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