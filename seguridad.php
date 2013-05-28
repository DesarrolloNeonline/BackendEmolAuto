<?
session_start();
if (($_SESSION["autentificado"] != "publicador")&&($_SESSION["autentificado"] != "ejecutivo") &&($_SESSION["autentificado"] != "sap")) {
//si no existe, envio a la p?gina de autentificacion
header("Location: login.php");
//y salimos del script
exit();
}
?>