B
<?
//chequeamos si los datos son correctos...
if ($_POST["usuario"]=="ejecutivo" && $_POST["contrasena"]=="ejecutivo2013autos"){
//usuario y contrase?a v?lidos
//entonces creamos una sesion....
session_start();
$_SESSION["autentificado"]= "ejecutivo";
header ("Location: index.php");
}
//else  
//if ($_POST["usuario"]=="ejecutivo" && $_POST["contrasena"]=="club2012"){
//usuario y contrase?a v?lidos
//entonces creamos una sesion....
//session_start();
//$_SESSION["autentificado"]= "ejecutivo";
//header ("Location: home_.php");
//} 
else
{
//si no existe le mando otra vez al index y con error
header("Location: login.php?errorusuario=si");
}
?>
