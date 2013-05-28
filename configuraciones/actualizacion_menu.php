<?php
require_once '../head.php';
?>
<script type="text/javascript" src="../js/jquery-ui-1.8.17.custom.min.js"></script>
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />
</head>
	<?php 
		include('menu.php');
		include('../config/connect.php');
		
		try 
		{
			$sql_nav_menu1  = 'select name_menu,url from nav_menu where id = 1';
			$nav_menu1 = mysql_query($sql_nav_menu1);
			$result_nav_menu1 = mysql_fetch_array($nav_menu1);
			$menu1= $result_nav_menu1[0];
			$url1= $result_nav_menu1[1];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar primer campo de menu');
		}
		try 
		{
			$sql_nav_menu2  = 'select name_menu,url from nav_menu where id = 2';
			$nav_menu2 = mysql_query($sql_nav_menu2);
			$result_nav_menu2 = mysql_fetch_array($nav_menu2);
			$menu2= $result_nav_menu2[0];
			$url2= $result_nav_menu2[1];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar segundo campo de menu');
		}
		try
		{
			$sql_nav_menu3  = 'select name_menu, url from nav_menu where id = 3';
			$nav_menu3 = mysql_query($sql_nav_menu3);
			$result_nav_menu3 = mysql_fetch_array($nav_menu3);
			$menu3= $result_nav_menu3[0];
			$url3= $result_nav_menu3[1];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar tercer campo de menu');
		}
		try
		{
			$sql_nav_menu4  = 'select name_menu, url from nav_menu where id = 4';
			$nav_menu4 = mysql_query($sql_nav_menu4);
			$result_nav_menu4 = mysql_fetch_array($nav_menu4);
			$menu4= $result_nav_menu4[0];
			$url4= $result_nav_menu4[1];
		}
		catch(PDOException $e) 
		{
			error_log($e->getMessage());
			die('Error al seleccionar cuarto campo de menu');
		}?>

<body>	
		<div id="content">
			<div id="formulario">
				<div id="pagina">
					<h2>Formulario de Actualizaci&oacute;n de Men&uacute; de Navegaci&oacute;n</h2>
				</div>
			</div>
			<div id="tabla">
				<div id="row">
					<div class="span13">
						<form  name = "form" action="procesa_menu.php" method="POST" id="myForm" enctype="multipart/form-data">
							<div class="form-actions">
								<div id="navmenu">
													<div>
														 <label class="description" for="element">Menu de Navegaci&oacute;n</label><br> 	
													</div>
													<div>
														<strong>Menu-1</strong>
														<input id="element" name="menu-1" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="Menu 1" value="<?php echo $menu1;?>"/>
														<input id="element" name="menu-direccionamiento-1" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="URL 1" value="<?php echo $url1;?>"/>
													</div>
													<div>
														<strong>Menu-2</strong>
														<input id="element" name="menu-2" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="Menu 2" value="<?php echo $menu2;?>"/> 
														<input id="element" name="menu-direccionamiento-2" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="URL 2" value="<?php echo $url2;?>"/>
													</div>
													<div>
														<strong>Menu-3</strong>
														<input id="element" name="menu-3" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="Menu 3" value="<?php echo $menu3;?>"/> 
														<input id="element" name="menu-direccionamiento-3" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="URL 3" value="<?php echo $url3;?>"/>
													</div>
													<div>
														<strong>Menu-4</strong>
														<input id="element" name="menu-4" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="Menu 4" value="<?php echo $menu4;?>"/> 
														<input id="element" name="menu-direccionamiento-4" class="element text medium" type="text" style="width:150px" maxlength="1500" placeholder="URL 4" value="<?php echo $url4;?>"/>
													</div>
								</div>
								<div id="navmenu" style="margin-top:40px">
									<ul>
										<li> 
											<button type='submit' style="margin-left: 130px;" class= 'btn btn-success' name='submit' value =''>Guardar</button>
										</li>
									</ul>
								</div>
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