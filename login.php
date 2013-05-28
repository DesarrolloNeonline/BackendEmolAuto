<?php
include ("head.php");	
?>
<html>
<head>
<link href="css/default.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/select_dependientes.js"></script><script src="js/jquery.js"></script><script src="js/bootstrap-dropdown.js"></script><link rel="stylesheet" type="text/css" href="chrome-extension://cgndfbhngibokieehnjhbjkkhbfmhojo/css/validation.css">
<title>Sistema de Administración del WebSite Emol Automoviles</title>
</head>

	<body>
		<div id="content" style="text-align:center;">
			<div id="pagina">
				<a href="http://club.mersap.com/emol_automovil/" target="_blank">
					<img src="images/logo.jpg" alt="Emol Automoviles">
				</a>
				<h1 style="font-size: 25px">Sistema de Administración del WebSite Emol Automoviles</h1>
				<br>
				<br>
				<form class="well form-search" action="control.php" method="POST">
					<div align="center"
						<?if ($_GET["errorusuario"]=="si"){?>
								class="alert alert-error">
								<span style="color:ffffff"><h3 class="alert-error">Datos incorrectos</h3></span>
							<?}else{?>
								class="alert alert-info">
								<span style="color:ffffff"><h3 class="alert-info">Ingrese datos de acceso</h3></span>
							<?}?>
					</div>
					<div align="center" style="margin-top: 10px;">
						<spanalign="right" ><br>Usuario:
						<br>
						<input  type="text"  name="usuario" maxlength="200" value="" >
						<span align="right" ><br>Contraseña:
						<br>
						<input  type="password"  name="contrasena"  maxlength="150">
					</div>
					<div align="center" style="margin-top: 15px;">
						<button type='submit'  align = "center" class= 'btn btn-primary' name='submit' value ='LOG IN'> <i class=''></i>Entrar </button>
					</div>
				</form>
			</div>
                    <span style="font-size:8px; ">
                           <b>Compatibilidad Google Chrome - Mozilla FireFox</b>
                    </span>	

		
		</div>
	</body>
</html>
