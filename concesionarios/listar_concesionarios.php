<?phprequire_once '../head.php';?><title>ClubdeLectores</title><link href='../css/style.css' rel='stylesheet' type='text/css' /><script type='text/javascript' src='../js/menu.js'></script></head>	<?php		require_once 'menu.php';	?>		<div id="content">			<div class="content">				<div id="formulario">					<div id="pagina">						<h2>Listado de  Concesionarios</h2>					</div>					 <form class="well form-search"  method="POST" action="listar_concesionarios.php"  >						<input valign="middle" class= "input-medium search-query" type="text" name="valor" size="100">																				<button type='submit' class= 'btn btn-info' data-content="table table-striped table-bordered table-condensed" rel="popover" data-original-title="titulo"> <i class='icon-search icon-white' ></i> Buscar</button>							<span class='label label-info'>RUT - BP Concesionario - Nombre Fantas&iacute;a</span>					</form>				</div>				<div id="tabla">						<?php						include('../config/connect.php');					    $valor=$_POST['valor'];					?>					<div id='archives' class='boxed'>						<table class='tablesorter'>							<thead>								<tr>									<th width='50px'>RUT</th><th width='50px'>Local</th><th width='50px'>BP Concesionario</th><th width='150px'>Logo</th><th width='100px'>Nombre Raz&oacute;n Social</th><th width='100px'>Nombre Fantas&iacute;a</th><th width='100px'>Tipo</th><th width='100px'>Prioridad</th><th width='100px'>Estado</th><th width='70px'></th><th width='70px'></th>								</tr>							</thead>										<?php   	   					if (!$valor)					{ 	 							try							{									$result_concesionario= mysql_query('select nombre_razonsocial, nombre_fantasia, logo_chico, bp_concesionario, estado, RUT, local, tipo,									 prioridad, estado, id_concesionario from concesionario',$conn)or die ('<h7>Error 500.- noo se puede ejecutar la consulta (busqueda todos)</h7>');									$max = mysql_num_rows($result_concesionario);									for($i=0;$i<$max;$i++)									{										$row_concesionario=mysql_fetch_row($result_concesionario);										$nombre_razonsocial=$row_concesionario[0];										$nombre_fantasia=$row_concesionario[1];										$logo=$row_concesionario[2];										$bp_concesionario=$row_concesionario[3];										$estado = $row_concesionario[4];										$rut    = $row_concesionario[5];										$local  =  $row_concesionario[6];										$tipo   = $row_concesionario[7];										$prioridad   = $row_concesionario[8];										$estado      = $row_concesionario[9];										$id_concesionario = $row_concesionario[10];					?>										<tr>											<td>												<?php echo $rut;?>											</td>											<td>												<?php echo $local;?>											</td>											<td>												<?php echo $bp_concesionario;?>											</td>											<td>												<img src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo;?>">																							</td>											<td>												<?php echo $nombre_razonsocial;?>											</td>											<td>												<?php echo $nombre_fantasia;?>											</td>											<td>												<?php echo $tipo;?>											</td>											<td>												<?php echo $prioridad;?>											</td>											<td>										<?php 											if($estado ==1)											{ ?>												Concesionario Destacado										<?php 											}											else{ ?>													Concesionario No Destacado										<?php	} ?>											</td>											<td>												<form id="form_1"  method="post" action="actualizar_concesionario.php">													<input type="hidden" name="id_concesionario" value="<?php echo $id_concesionario?>"/>													<button type="submit2" class= "btn btn-primary"> Actualizar</button>												</form>												</td>											 <td>												<form id="form_1"  method="post" action="eliminar_concesionario.php" onclick="return confirm('�Est� seguro de eliminar este Concesionario?');">													<input type="hidden" name="id_concesionario" value="<?php echo $id_concesionario?>"/>													<button type="submit2" class= "btn btn-primary"> Eliminar</button>												</form>												</td>										</tr>																<?php			}							}							catch(PDOException $e) 							{								error_log($e->getMessage());								die('Error al listar los Concesionarios con BP Concesionario '.$bp_concesionario.'.');							}					}						else {							 function decode($texto){								 $despues = Array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&atilde;","&otilde;","&acirc;","&ecirc;","&ecirc;","&ocirc;","&ucirc;","&ccedil;","&uuml;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Atilde;","&Otilde;","&Acirc;","&Ecirc;","&Icirc;","&Ocirc;","&Ucirc;","&Ccedil;","&Uuml;","&ntilde;","&Ntilde;");								 $antes = Array('�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�');								 $nuevo = str_replace($antes,$despues,$texto);								 return $nuevo;							}							$valor=decode($valor);							try							{									$result_concesionario= mysql_query('select nombre_razonsocial, nombre_fantasia, logo_chico, bp_concesionario, estado, RUT, local, tipo,									 prioridad, estado, id_concesionario from concesionario where RUT LIKE "%'.$valor.'%" OR bp_concesionario LIKE "%'.$valor.'%" OR nombre_fantasia LIKE "%'.$valor.'%"',$conn)or die ('<h7>Error 500.- noo se puede ejecutar la consulta (busqueda todos)</h7>');									$max = mysql_num_rows($result_concesionario);									for($i=0;$i<$max;$i++)									{										$row_concesionario=mysql_fetch_row($result_concesionario);										$nombre_razonsocial =$row_concesionario[0];										$nombre_fantasia  = $row_concesionario[1];										$logo=$row_concesionario[2];										$bp_concesionario=$row_concesionario[3];										$estado = $row_concesionario[4];										$rut    = $row_concesionario[5];										$local  = $row_concesionario[6];										$tipo   = $row_concesionario[7];										$prioridad   = $row_concesionario[8];										$estado      = $row_concesionario[9];										$id_concesionario = $row_concesionario[10];					?>										<tr>											<td>												<?php echo $rut;?>											</td>											<td>												<?php echo $local;?>											</td>											<td>												<?php echo $bp_concesionario;?>											</td>											<td>												<img src="<?php echo $folder_frontend;?>/upload/concesionarios/<?php echo $logo;?>">																							</td>											<td>												<?php echo $nombre_razonsocial;?>											</td>											<td>												<?php echo $nombre_fantasia;?>											</td>											<td>												<?php echo $tipo;?>											</td>											<td>												<?php echo $prioridad;?>											</td>											<td>										<?php 											if($estado ==1)											{ ?>												Concesionario Destacado										<?php 											}											else{ ?>													Concesionario No Destacado										<?php	} ?>											</td>											<td>												<form id="form_1"  method="post" action="actualizar_concesionario.php">													<input type="hidden" name="id_concesionario" value="<?php echo $id_concesionario?>"/>													<button type="submit2" class= "btn btn-primary"> Actualizar</button>												</form>												</td>											 <td>												<form id="form_1"  method="post" action="eliminar_concesionario.php" onclick="return confirm('�Est� seguro de eliminar este Concesionario?');">													<input type="hidden" name="id_concesionario" value="<?php echo $id_concesionario?>"/>													<button type="submit2" class= "btn btn-primary"> Eliminar</button>												</form>												</td>										</tr>																<?php			}							}							catch(PDOException $e) 							{								error_log($e->getMessage());								die('Error al listar los Concesionarios con BP Concesionario '.$bp_concesionario.'.');							}						}						?>						</table>							<?php mysql_close($conn);							?>						  <div id="pager" class="pager" style="position:relative;">							<form>								<img src="../images/first.png" class="first"/>								<img src="../images/prev.png" class="prev"/>								<input type="text" class="pagedisplay"/>								<img src="../images/next.png" class="next"/>								<img src="../images/last.png" class="last"/>								<select class="pagesize">									<option selected="selected"  value="10">10</option>									<option value="20">20</option>									<option value="30">30</option>									<option value="40">40</option>								</select>							</form>						</div>					</div>				</div>								</div>		</div>		<script type="text/javascript" src="../js/jquery-1.7.min.js"></script>		<script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>		<script type="text/javascript" src="../js/jquery.tablesorter.pager.js"></script>		<script type="text/javascript" src="../js/main.js"></script>	</body></html>