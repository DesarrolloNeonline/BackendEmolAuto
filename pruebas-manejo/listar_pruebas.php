<?phprequire_once '../head.php';?><title>ClubdeLectores</title><link href='../css/style.css' rel='stylesheet' type='text/css' /><script type='text/javascript' src='../js/menu.js'></script></head>	<?php		include('menu.php');		include('../config/connect.php');	?>		<div id="content">			<div class="content">				<div id="formulario">					<div id="pagina">						<h2>Listado de Pruebas de Manejo</h2>					</div>					 <!--<form class="well form-search"  method="POST" action="listar_album.php"  >						<input valign="middle" class= "input-medium search-query" type="text" name="valor" size="100">																				<button type='submit' class= 'btn btn-info' data-content="table table-striped table-bordered table-condensed" rel="popover" data-original-title="titulo"> <i class='icon-search icon-white' ></i> Buscar</button>					</form>-->				</div>				<div id="tabla">						<?php						    $valor=$_POST['valor'];					?>					<div id='archives' class='boxed'>						<table class='tablesorter'>							<thead>								<tr>									<th width='150px'>T&iacute;tulo Prueba</th><th width='150px'>Subt&iacute;tulo Prueba</th><th width='100px'>Estado de Prueba</th><th width='150px'>Periodista</th><th width='100px'>Fecha</th><th width='70px'></th><th width='70px'></th>								</tr>							</thead>					<?php   	 							try							{											$sql_pruebas_maneja = 'select id_prueba, titulo_prueba, periodista, fecha_prueba, bajada_titulo, estado_prueba, subtitulo_prueba									  from pruebas_manejo';									$result_pruebas_manejo= mysql_query($sql_pruebas_maneja);									$max = mysql_num_rows($result_pruebas_manejo);									for($i=0;$i<$max;$i++)									{										$array_pruebas_manejo	=mysql_fetch_row($result_pruebas_manejo);										$id_prueba				=$array_pruebas_manejo[0];										$titulo_prueba			=$array_pruebas_manejo[1];										$periodista				=$array_pruebas_manejo[2];										$fecha					= $array_pruebas_manejo[3];										$bajada_titulo			= $array_pruebas_manejo[4];										$estado_prueba			= $array_pruebas_manejo[5];										$subtitulo_prueba       = $array_pruebas_manejo[6];															?>										<tr>											<td>												<?php echo $titulo_prueba;?>											</td>											<td>												<?php echo $subtitulo_prueba;?>											</td>											<td>												<?php 												if($estado_prueba ==1)												{ ?>													Prueba  publicada												<?php  												} 												else													{ ?>														Prueba no publicada												<?php												    }												?>											</td>											<td>												<?php echo $periodista;?>																							</td>											<td>												<?php echo $fecha;?>											</td>											<td>												<form id="form_1"  method="post" action="actualizar_prueba.php">													<input type="hidden" name="id_prueba" value="<?php echo $id_prueba?>"/>													<button type="submit2" class= "btn btn-primary"> Actualizar</button>												</form>												</td>											 <td>												<form id="form_1"  method="post" action="eliminar_pruebas.php" onclick="return confirm('�Est� seguro de eliminar esta Prueba de Manejo?');">													<input type="hidden" name="id_prueba" value="<?php echo $id_prueba?>"/>													<button type="submit2" class= "btn btn-primary"> Eliminar</button>												</form>												</td>										</tr>														<?php					}							}							catch(PDOException $e) 							{								error_log($e->getMessage());								die('Error al listar las Concesionarios con BP Concesionario '.$bp_concesionario.'.');							}?>						</table>							<?php mysql_close($conn);							?>						  <div id="pager" class="pager" style="position:relative;">							<form>								<img src="../images/first.png" class="first"/>								<img src="../images/prev.png" class="prev"/>								<input type="text" class="pagedisplay"/>								<img src="../images/next.png" class="next"/>								<img src="../images/last.png" class="last"/>								<select class="pagesize">									<option selected="selected"  value="10">10</option>									<option value="20">20</option>									<option value="30">30</option>									<option value="40">40</option>								</select>							</form>						</div>					</div>				</div>								</div>		</div>		<script type="text/javascript" src="../js/jquery-1.7.min.js"></script>		<script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>		<script type="text/javascript" src="../js/jquery.tablesorter.pager.js"></script>		<script type="text/javascript" src="../js/main.js"></script>	</body></html>